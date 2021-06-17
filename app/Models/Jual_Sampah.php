<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $pengepul_id_pengepul
 * @property string $tgl_jual
 * @property float $total_jual
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Pengepul $pengepul
 * @property DetailPenjualan[] $detailPenjualans
 */
class Jual_Sampah extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'jual_sampah';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['pengepul_id_pengepul', 'tgl_jual', 'total_jual', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengepul()
    {
        return $this->belongsTo('App\Models\Pengepul', 'pengepul_id_pengepul');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailPenjualans()
    {
        return $this->hasMany('App\Models\DetailPenjualan');
    }
}
