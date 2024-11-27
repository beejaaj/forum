<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/*Laravel . Clean Code . MongoDB [?]

VIEW ---
<form> action="{{route('users.update') }}" method=POST
decorator: @method('PUT')

<label> class=form-label<foto>

<input type=file>
--- VIEW

__
CONTROLLER
a validação da foto (se ela é png ou não [mimes], por ex. pdf) ocorre no update do UserController
inputbox==validate(['image'

?
@error _mostrar mensagem de erro

::Banco de dados não-relacional <-> armazenamento de imagens em base64 .opcional;/não viavel, fora do escopo
= Nomes de arquivos. As imagens podem ser salvas de modo que um usuario sobrescreva a foto de outro. Como evitar?

Para poder acessar publicamente a pasta storage (public/storage ../images/arquivo.png):
php artisan storage::link

github/profAndreSouza
*/

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function ratings(){
        return $this->hasMany(Rate::class);
    }

    public function isModerator(){
        return $this->role === 'moderator' || $this->role === 'admin';
    }
    public function isAdmin(){
        return $this->role === 'admin';
    }
}
