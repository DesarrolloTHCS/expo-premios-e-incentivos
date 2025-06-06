<?php

namespace App\Livewire;

use App\Models\Form;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class FormsTable extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $query = "";
    public function search()
    {
        $this->resetPage();
    }
    public function render()
    {
        $forms = Form::with('company')
                    ->where('folio', 'like', '%' . $this->query . '%')
                    ->orWhere('name', 'like', '%' . $this->query . '%')
                    ->orWhere('last_name', 'like', '%' . $this->query . '%')
                    ->orWhere('phone_number', 'like', '%' . $this->query . '%')
                    ->orWhere('company', 'like', '%' . $this->query . '%')
                    ->orWhereHas('company', function ($query) {
                        $query->where('name', 'like', '%' . $this->query . '%');
                    })
                    ->orWhere('organization_title', 'like', '%' . $this->query . '%')
                    ->orWhere('interest', 'like', '%' . $this->query . '%')
                    ->paginate(10);

        return view('livewire.forms-table', ['forms' => $forms ]);
    }
}
