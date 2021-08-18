<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MaterielSalle
 *
 * @property $id
 * @property $materiel_id
 * @property $Salle_id
 *
 * @property Materiel $materiel
 * @property Salle $salles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MaterielSalle extends Model
{
    public $timestamps = false;

    static $rules = [
        'materiel_id' => 'required',
        'salle_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['materiel_id','salle_id'];


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
    public function salle()
    {
        return $this->hasOne('App\Models\Salle', 'id', 'salle_id');
    }

}
