<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materiel
 *
 * @property $id
 * @property $description
 * @property $type_id
 *
 * @property Declassee[] $declassees
 * @property MaterielPersonne[] $materielPersonnes
 * @property MaterielSalle[] $materielSalles
 * @property TypeMateriel $typeMateriel
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materiel extends Model
{
    public $timestamps = false;

    static $rules = [
        'description' => 'required',
        'type_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','type_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function declassees()
    {
        return $this->hasMany('App\Models\Declassee', 'materiel_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materielPersonnes()
    {
        return $this->hasMany('App\Models\MaterielPersonne', 'materiel_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materielSalles()
    {
        return $this->hasMany('App\Models\MaterielSalle', 'materiel_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function typeMateriel()
    {
        return $this->hasOne('App\Models\TypeMateriel', 'id', 'type_id');
    }


}
