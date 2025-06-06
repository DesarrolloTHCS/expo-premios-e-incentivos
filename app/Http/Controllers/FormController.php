<?php

namespace App\Http\Controllers;

use App\Exports\RegisterExport;
use App\Models\Form;
use App\Mail\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'company_id' => 'required|exists:companies,id',
            'company' => 'required|string',
            'organization_title' => 'required|string',
            'interest' => 'required|string|max:1000'
        ]);

        // Generar el número de folio único
        $folio = 'EPEI-' . Str::upper(Str::random(2)) . rand(10, 99);

        // Verificar que el folio sea único
        while (Form::where('folio', $folio)->exists()) {
            $folio = 'EPEI-' . Str::upper(Str::random(2)) . rand(10, 99);
        }

        // Crear y guardar el nuevo registro
        $form = Form::create([
            'folio' => $folio,
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'company_id' => $request->input('company_id'),
            'company' => $request->input('company'),
            'organization_title' => $request->input('organization_title'),
            'interest' => $request->input('interest')
        ]);

        // Enviar correo electrónico
        Mail::to($request->email)
        ->bcc('marcos@tuhogarconsentido.com')
        ->send(new Register($form));

        // Redireccionar con un mensaje de éxito
        return redirect('/#registro')->with('success', '¡Registro completado correctamente!');
    }

    public function export(){
        return Excel::download(new RegisterExport,'Usuarios_registrados.xlsx');
    }
}
