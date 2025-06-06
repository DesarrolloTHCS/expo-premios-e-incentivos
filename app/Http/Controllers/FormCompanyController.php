<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FormCompanyController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'company' => 'required'
        ]);

        // Crear y guardar el nuevo registro
        Company::create([
            'name' => $request->input('company'),
            'slug' => Str::slug($request->input('company'))
        ]);

        return redirect('/company-manager');
    }
}
