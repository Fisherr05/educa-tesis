<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
class UserIndex extends Component
{
    use WithPagination;
    protected $paginationTheme="bootstrap";

    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $keyWord = '%' . $this->search . '%';
        $users=User::where('nombres','LIKE',$keyWord)
        ->orWhere('apellidos','LIKE',$keyWord)
        ->orWhere('email','LIKE',$keyWord)
        ->paginate();
        return view('livewire.admin.user-index', compact('users'));
    }
}
