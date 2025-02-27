<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los portafolios con su categoría correspondiente
        $portfolios = Portfolio::with('category')->get();

        // Filtrar los portafolios por categoría
        $projectPortfolios = $portfolios->filter(function ($portfolio) {
            return $portfolio->category && $portfolio->category->title === 'Projects';
        });

        return view('pages.service', 
            compact(
                'projectPortfolios',
            )
        );

    }
}
