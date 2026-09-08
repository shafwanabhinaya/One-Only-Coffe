<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display the landing page with restaurant menu.
     */
    public function index(Request $request)
    {
        $categoryOrder = [
            'Signature',
            'Espresso Based',
            'Coffee Based',
            'Literan',
            'Non-Coffee (Milky Based)',
            'Non-Coffee (Tea Based)',
            'Non-Coffee (Soda Based)',
        ];

        $menus = Menu::all();

        // Sort menus by defined category order
        $groupedMenus = $menus->groupBy('category')->sortBy(function ($items, $category) use ($categoryOrder) {
            $index = array_search($category, $categoryOrder);
            return $index !== false ? $index : 999;
        });

        $signatureMenus = $menus->where('category', 'Signature');
        $categories = collect($categoryOrder)->filter(fn($cat) => $menus->pluck('category')->contains($cat))->values();

        return view('welcome', compact('menus', 'groupedMenus', 'signatureMenus', 'categories'));
    }
}
