<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeMateriel
 *
 * @property $id
 * @property $name
 *
 * @property Materiel[] $materiels
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TypeMateriel extends Model
{
    public $timestamps = false;

    static $rules = [
        'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materiels()
    {
        return $this->hasMany('App\Models\Materiel', 'type_id', 'id');
    }


}
