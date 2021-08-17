<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaterielPersonne
 *
 * @property $id
 * @property $materiel_id
 * @property $personne_id
 *
 * @property Materiel $materiel
 * @property Personne $personne
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaterielPersonne extends Model
{
    public $timestamps = false;

    static $rules = [
        'materiel_id' => 'required',
        'personne_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['materiel_id','personne_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materiel()
    {
        return $this->hasOne('App\Models\Materiel', 'id', 'materiel_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personne()
    {
        return $this->hasOne('App\Models\Personne', 'id', 'personne_id');
    }


}
