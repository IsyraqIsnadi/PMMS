<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('report.index', compact('reports'));
    }

    public function create()
    {
        return view('report.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'user_id' => 'required',
            'report_type' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required',
            'file_name' => 'required',
        ]);

        // Create a new report
        $report = Report::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('report.index')->with('success', 'Report created successfully.');
    }

    public function show(Report $report)
    {
        return view('report.show', compact('report'));
    }

    public function edit(Report $report)
    {
        return view('report.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'user_id' => 'required',
            'report_type' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required',
            'file_name' => 'required',
        ]);

        // Update the report
        $report->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('report.index')->with('success', 'Report updated successfully.');
    }

    public function destroy(Report $report)
    {
        // Delete the report
        $report->delete();

        // Redirect to the index page with a success message
        return redirect()->route('report.index')->with('success', 'Report deleted successfully.');
    }
}