<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $response = Http::timeout(5) // 5 seconds timeout
                ->get('https://react-fast-pizza-api.onrender.com/api/menu');
            
            $pizzas = $response->successful() 
                ? collect($response->json()['data'])
                : collect();
                
        } catch (\Exception $e) {
            $pizzas = collect(); // Empty collection on failure
        }

        return view('dashboard', ['pizzas' => $pizzas]);
    }
}