<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // Get featured product with relationships
        $featuredProduct = Portfolio::with(['category', 'details'])
            ->where('featured', true)
            ->first();
        
        // Get portfolios marked for home display with relationships
        $homePortfolios = Portfolio::with(['category', 'details'])
            ->where('show_on_home', true)
            ->latest()
            ->get();
        
        return view('welcome-v2', compact('featuredProduct', 'homePortfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
