<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        $reports=Report::all();
        return view('report.index', compact('reports'));
    }
    public function destroy(Report $report) {
        $report->delete();
        return redirect()->back();
    }
    public function store(Request $request, Report $report) {
        $data = $request->validate([
            'description' => 'nullable|string', // Используйте 'nullable|string'
        ]);
        
        $data['number'] = uniqid();
        
        $report->create($data);
        
        return redirect()->back()->with('success', 'Report created successfully.');
    }

    public function show(Report $report) {
        return view('report.show', compact('report'));
    }

    public function update(Request $request, Report $report) {
        $data = $request->validate([
            'description' => 'nullable|string', // Используйте 'nullable|string'
        ]);
        
        $data['number'] = uniqid();
        
        $report->update($data);
        
        return redirect()->back()->with('success', 'Report created successfully.');
    }
}
