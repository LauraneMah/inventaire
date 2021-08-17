<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Declassee
 *
 * @property $id
 * @property $stock
 * @property $motive
 * @property $materiel_id
 *
 * @property Materiel $materiel
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Declassee extends Model
{
    public $timestamps = false;

    static $rules = [
        'stock' => 'required',
        'motive' => 'required',
        'materiel_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['stock','motive','materiel_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materiel()
    {
        return $this->hasOne('App\Models\Materiel', 'id', 'materiel_id');
    }


}
