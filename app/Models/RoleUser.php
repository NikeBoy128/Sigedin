<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoleUser
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $role_id
 * @property $usuario_id
 *
 * @property Role $role
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RoleUser extends Model
{
    protected $table = 'role_user';
    
    static $rules = [
		'role_id' => 'required',
		'usuario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['role_id','usuario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'role_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuario_id');
    }
    

}
