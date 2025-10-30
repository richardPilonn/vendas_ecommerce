<?php

namespace App\Livewire\Usuarios;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UsuarioCreate extends Component
{

    public $nome;
    public $email;
    public $password;
    
    protected $rules = [
        'nome' => 'required|string|min:3|max:120',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'nome.required' => 'O nome é obrigatório',
        'nome.string' =>'O nome deve ser um texto válido',
        'nome.min' => 'O nome deve ter pelo menos 3 caracteres',
        'nome.max' => 'O nome não pode ultrapassar os 120 caracteres',

        'email.required' => 'O email é obrigatório',
        'email.unique' => 'O email ja esta cadastrado',
        'email.email' => 'O formato do email esta inválido',

        'password.required' => 'A senha é obrigatória',
        'password.min' => 'A senha deve ter pelo menos 6 caracteres',
    ];

    public function save(){

        $this->validate();

        $user = User::create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Usuario::create([
            'user_id' => $user->id,
            'nome' => $this->nome,
        ]);

        session()->flash('message', 'Usuario criado com sucesso');
        $this->reset(['nome', 'email', 'password']);
    //    return redirect()->route('usuario.index');        
    }


    public function render()
    {
        return view('livewire.usuarios.usuario-create');
    }
}
