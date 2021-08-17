<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Personne
 *
 * @property $id
 * @property $name
 * @property $first_name
 * @property $username
 * @property $password
 * @property $role_id
 *
 * @property MaterielPersonne[] $materielPersonnes
 * @property Role $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Personne extends Model
{
    public $timestamps = false;

    static $rules = [
        'name' => 'required',
        'first_name' => 'required',
        'username' => 'required',
        'password' => 'required',
        'role_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','first_name','username','password','role_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materielPersonnes()
    {
        return $this->hasMany('App\Models\MaterielPersonne', 'personne_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'role_id');
    }


}
