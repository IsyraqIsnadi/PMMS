<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Auth;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::all(); // Retrieve all payment records from the database
        return view('payment/index', ['payments' => $payments]); // Pass the payment records to the index view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payment/create'); // Display the create form view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment = Payment::create([
            'user_id' => Auth::user()->id, // Get the ID of the currently authenticated user
            'item' => $request->item, // Retrieve the 'item' value from the request
            'total' => $request->total, // Retrieve the 'total' value from the request
            'method' => $request->method, // Retrieve the 'method' value from the request
            'status' => $request->status, // Retrieve the 'status' value from the request
        ]);

        return redirect(route('payment.index', $payment->id)); // Redirect to the index view with the newly created payment's ID

    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        // This method is currently empty, you can implement logic to display the specified payment if needed
    }

    /**
     * Edit the specified resource in storage.
     */
    public function edit(Payment $payment)
    {
        return view('payment/edit', ['payment' => $payment]); // Pass the payment record to the edit view

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        $payment->item = $request->item; // Update the 'item' attribute of the payment with the value from the request
        $payment->total = $request->total; // Update the 'total' attribute of the payment with the value from the request
        $payment->method = $request->method; // Update the 'method' attribute of the payment with the value from the request
        $payment->status = $request->status; // Update the 'status' attribute of the payment with the value from the request
        $payment->update(); // Save the changes to the payment record in the database

        return redirect()->route('payment.index', [$payment->id]); // Redirect to the index view with the updated payment's ID

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete(); // Delete the specified payment record from the database
        return redirect(route('payment.index')); // Redirect to the index view
    }
}
