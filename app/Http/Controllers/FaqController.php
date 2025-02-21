<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'number' => 'required|integer',
            'display_order' => 'required|integer',
        ]);

        Faq::create($validated);

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $faq = Faq::find($id);
        return view('faqs.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'number' => 'required|integer',
            'display_order' => 'required|integer',
        ]);

        $faq = Faq::find($id);
        $faq->update($validated);

        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully');
    }
}
