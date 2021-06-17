<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $kelurahan_id
 * @property string $nama_kecamatan
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Kelurahan $kelurahan
 * @property Kelurahan[] $kelurahans
 */
class Kecamatan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kecamatan';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kelurahan_id', 'nama_kecamatan', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelurahan()
    {
        return $this->belongsTo('App\Models\Kelurahan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kelurahans()
    {
        return $this->hasMany('App\Models\Kelurahan');
    }
}
