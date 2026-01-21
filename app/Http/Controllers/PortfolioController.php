<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\PortfolioDetail;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // Obtener todas las categorías
        $categories = Category::all();

        // Obtener todos los portafolios con su categoría correspondiente
        $portfolios = Portfolio::with('category')->get();

        // Filtrar los portafolios por categoría
        $brandPortfolios = $portfolios->filter(function ($portfolio) {
            return $portfolio->category && $portfolio->category->title === 'Brand';
        });

        // Filtrar los portafolios por categoría
        $projectPortfolios = $portfolios->filter(function ($portfolio) {
            return $portfolio->category && $portfolio->category->title === 'Projects';
        });

        return view('pages.my-project', 
            compact(
                'portfolios', 
                'brandPortfolios', 
                'projectPortfolios', 
                'categories'
            )
        );
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
        // Buscar el registro de PortfolioDetail que tenga el mismo portfolio_id
        //$detail = PortfolioDetail::where('portfolio_id', $portfolio->id)->first();
        //return view('pages.portfolio-detail', compact('portfolio', 'detail'));

        $detail = PortfolioDetail::where('portfolio_id', $portfolio->id)->first();

        // 👉 Fallback: si NO hay detalle, redirige al MVP
        if (!$detail && $portfolio->mvp_url) {
            return redirect()->away($portfolio->mvp_url);
        }

        // 👉 Si no hay detalle ni MVP, 404 real
        if (!$detail) {
            abort(404);
        }

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
