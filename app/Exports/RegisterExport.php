<?php

namespace App\Exports;

use App\Models\Form;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RegisterExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Form::with('company')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Invitado por',
            'Folio',
            'Nombre',
            'Apellido',
            'Correo',
            'Teléfono',
            'Empresa',
            'Puesto',
            'Interés',
        ];
    }

    public function map($form): array
    {
        return [
            $form->id,
            $form->Company->name,
            $form->folio,
            $form->name,
            $form->last_name,
            $form->email,
            $form->phone_number,
            $form->company,
            $form->organization_title,
            $form->interest,
        ];
    }
}
