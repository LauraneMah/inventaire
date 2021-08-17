<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Salle
 *
 * @property $id
 * @property $name
 * @property $number
 *
 * @property MaterielSalle[] $materielSalles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Salle extends Model
{
    public $timestamps = false;

    static $rules = [
        'name' => 'required',
        'number' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','number'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materielSalles()
    {
        return $this->hasMany('App\Models\MaterielSalle', 'salle_id', 'id');
    }


}
