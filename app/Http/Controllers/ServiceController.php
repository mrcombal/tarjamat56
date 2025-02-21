<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'display_order' => 'required|integer',
            'icon' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add file validation
            'color' => 'required|string|max:7', // Assuming color is a hex code
        ]);

        // Handle the file upload for 'icon'
    if ($request->hasFile('icon')) {
        $originalFileName = $request->file('icon')->getClientOriginalName(); // Get the original file name
        $iconPath = $request->file('icon')->storeAs('icons', $originalFileName, 'public'); // Save file with the original name
        $validated['icon'] = $iconPath; // Store the path in the database
    }

        Service::create($validated);

        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }


    public function show($id)
    {
        $service = Service::find($id);
        return view('services.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.edit', compact('service'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'display_order' => 'required|integer',
            'icon' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048', // Update file validation
            'color' => 'required|string|max:7',
        ]);

        $service = Service::find($id);

        // Handle file upload
        if ($request->hasFile('icon')) {
            // Delete the old icon if exists
            if ($service->icon) {
                Storage::delete('public/' . $service->icon);
            }
            $originalFileName = $request->file('icon')->getClientOriginalName();
            $iconPath = $request->file('icon')->storeAs('icons', $originalFileName, 'public');
            $validated['icon'] = $iconPath;
        }

        $service->update($validated);

        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }


    public function destroy($id)
    {
        $service = Service::find($id);

        // Delete the associated icon file if it exists
        if ($service->icon) {
            Storage::delete('public/' . $service->icon);
        }

        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }

}
