<?php

namespace App\Livewire;

use App\Mail\ReminderMail;
use App\Models\Form;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class SendReminders extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $selected = []; //Crear un array vacío
    public function sendToSelected()
    {
        if ($this->selected == null) {
        } else {
            //Elimina los IDs duplicados del array $selected
            $uniqueIds = array_unique($this->selected);

            //Itera sobre cada ID único
            foreach ($uniqueIds as $id) {
                //Busca el formulario por su ID en la base de datos
                $form = Form::find($id);

                //Verifica si el registro existe
                if ($form) {
                    //Envía un ReminderMail (correo) al email seleccionado
                    Mail::to($form->email)->send(new ReminderMail($form));
                }
            }

            //Mostrar el mensaje de éxito
            redirect('/reminders')->with('success', '¡Correos enviados correctamente!');
        }
    }
    public function sendToAll()
    {
        //Obtener todos los registros de la tabla
        $forms = Form::all();

        //Extraer los emails sin repetir
        $uniqueEmails = $forms->pluck('email')->unique();

        //Iterar sobre los correos electrónicos únicos
        foreach ($uniqueEmails as $email) {
            //Encontrar el primer registro con el email
            $form = $forms->firstWhere('email', $email);

            //Enviar el correo
            Mail::to($email)->send(new ReminderMail($form));
        }

        //Mostrar el mensaje de éxito
        redirect('/reminders')->with('success', '¡Correos enviados a todos correctamente!');
    }
    public function render()
    {
        //Registros a mostrar por página
        $perPage = 20;

        //Obtener la página actual
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Eliminar duplicados por email y convertir a colección
        $forms = Form::all()->unique('email')->values();

        //Crear nueva instancia de LengthAwarePaginator
        $paginatedForms = new LengthAwarePaginator(
            $forms->forPage($currentPage, $perPage),    //Divide la colección en páginas
            $forms->count(),                            //Obtiene el número total de elementos en la colección
            $perPage,                                   //Número de elementos por página
            $currentPage,                               //Página actual
            ['path' => LengthAwarePaginator::resolveCurrentPath()] //Establece la ruta actual para los enlaces de paginación
        );

        //Envía la variable $forms con el valor $paginatedForms a la vista livewire.send-reminders
        return view('livewire.send-reminders', ['forms' => $paginatedForms]);
    }
}
