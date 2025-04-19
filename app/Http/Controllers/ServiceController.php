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
            'name_ar' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'display_order' => 'required|integer',
            'icon' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo' => 'required|string|in:teal,olive,bronze,crimson,violet,magenta', // Validate the selected photo
            'color' => 'required|string|max:7',
        ]);
    
        if ($request->hasFile('icon')) {
            $originalFileName = $request->file('icon')->getClientOriginalName();
            $iconPath = $request->file('icon')->storeAs('icons', $originalFileName, 'public');
            $validated['icon'] = $iconPath;
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
            'name_ar' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'display_order' => 'required|integer',
            'icon' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photo' => 'required|string|in:teal,olive,bronze,crimson,violet,magenta', // Validate the selected photo
            'color' => 'required|string|max:7',
        ]);
    
        $service = Service::find($id);
    
        // Icon update
        if ($request->hasFile('icon')) {
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
    
        if ($service->icon) {
            Storage::delete('public/' . $service->icon);
        }

        $service->delete();
    
        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }
    

}
