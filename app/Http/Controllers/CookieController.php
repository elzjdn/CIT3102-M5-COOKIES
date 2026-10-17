<?php

namespace App\Http\Controllers;

use App\Models\Cookie;
use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function index(Request $request)
    {
        $allowed = ['flavor', 'category'];   // whitelist
        $query = Cookie::query();

        foreach ($allowed as $field) {
            if ($request->filled($field)) {
                $query->where($field, $request->query($field));
            }
        }

        return response()->json($query->get(), 200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'flavor'   => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price'    => 'required|numeric|min:0',
            'stock'    => 'required|integer|min:0',
        ]);

        $cookie = Cookie::create($data);
        return response()->json($cookie, 201);
    }

    public function show(Cookie $cookie)
    {
        return response()->json($cookie, 200);
    }

    public function update(Request $request, Cookie $cookie)
    {
        $data = $request->validate([
            'name'     => 'sometimes|required|string|max:255',
            'flavor'   => 'sometimes|required|string|max:255',
            'category' => 'sometimes|required|string|max:255',
            'price'    => 'sometimes|required|numeric|min:0',
            'stock'    => 'sometimes|required|integer|min:0',
        ]);

        $cookie->update($data);
        return response()->json($cookie, 200);
    }

    public function destroy(Cookie $cookie)
    {
        $cookie->delete();
        return response()->noContent();   // 204
    }
}