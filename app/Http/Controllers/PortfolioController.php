<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioDetail;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.portfolio');
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
    public function show(Portfolio $portfolio)
    {
        /*
            #attributes: array:7 [▼
                "id" => 5
                "titulo" => "Portfolio 3"
                "slug" => "portfolio-3"
                "descripcion" => "<p>Des 3</p>"
                "imagen" => "portfolios/01JMFK7F06QN236F6DZ7HSGB0X.png"
                "created_at" => "2025-02-19 17:13:59"
                "updated_at" => "2025-02-19 17:13:59"
            ]
        */

        // Buscar el registro de PortfolioDetail que tenga el mismo portfolio_id
        $detail = PortfolioDetail::where('portfolio_id', $portfolio->id)->first();

        //@dd($detail);
        return view('pages.portfolio-detail', compact('portfolio', 'detail'));
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
