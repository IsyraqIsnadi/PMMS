<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Roster;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::with('roster')->get();
        $rosters = Roster::all(); // Retrieve all rosters
        return view('report.index', ['reports' => $reports, 'rosters' => $rosters]);
    }

    public function create()
    {
        $rosters = Roster::all();
        return view('report.create', compact('rosters'));
    }

    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'report_type' => 'required',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'status' => 'required',
        'file_name' => 'required',
        'roster_id' => 'nullable|exists:rosters,id',
    ]);

    // Fetch the authenticated user's ID
    $user_id = auth()->id();

    // Create a new report
    $report = Report::create([
        'user_id' => $user_id,
        'report_type' => $validatedData['report_type'],
        'start_date' => $validatedData['start_date'],
        'end_date' => $validatedData['end_date'],
        'status' => $validatedData['status'],
        'file_name' => $validatedData['file_name'],
    ]);

    // Associate the roster information
    $rosterId = $request->input('roster_id');
    if ($rosterId) {
        $roster = Roster::find($rosterId);
        $report->roster()->associate($roster);
        $report->save();
    }

    // Redirect to the index page with a success message
    return redirect()->route('report.index')->with('success', 'Report created successfully.');
    }


    public function show(Report $report)
    {
        return view('report.show', compact('report'));
    }

    public function edit(Report $report)
    {
        $rosters = Roster::all();
        return view('report.edit', compact('report', 'rosters'));
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
            'roster_id' => 'nullable|exists:rosters,id',
        ]);

        // Update the report
        $report->update($validatedData);

        // Associate the roster information
        $rosterId = $request->input('roster_id');
        if ($rosterId) {
            $roster = Roster::find($rosterId);
            $report->roster()->associate($roster);
            $report->save();
        }

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
