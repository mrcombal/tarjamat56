<?php

namespace App\Http\Controllers;

use App\Models\GenericContent;
use Illuminate\Http\Request;

class GenericContentController extends Controller
{
    public function index()
    {
        $contents = GenericContent::all();
        return view('generic_contents.index', compact('contents'));
    }

    public function create()
    {
        return view('generic_contents.create');
    }

    public function store(Request $request)
    {
        GenericContent::create($request->all());
        return redirect()->route('generic-content.index')->with('success', 'Content created successfully');
    }

    public function show($id)
    {
        $content = GenericContent::find($id);
        return view('generic_contents.show', compact('content'));
    }

    public function edit($id)
    {
        $content = GenericContent::find($id);
        return view('generic_contents.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $content = GenericContent::find($id);
        $content->update($request->all());
        return redirect()->route('generic-content.index')->with('success', 'Content updated successfully');
    }

    public function destroy($id)
    {
        $content = GenericContent::find($id);
        $content->delete();
        return redirect()->route('generic-content.index')->with('success', 'Content deleted successfully');
    }
}
