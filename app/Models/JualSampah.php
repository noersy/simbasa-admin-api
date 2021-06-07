<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property float $id_jual
 * @property float $pengepul_id_pengepul
 * @property string $tgl_jual
 * @property float $total_jual
 * @property Pengepul $pengepul
 * @property DetailPenjualan[] $detailPenjualans
 */
class JualSampah extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'jual_sampah';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_jual';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'float';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['pengepul_id_pengepul', 'tgl_jual', 'total_jual'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengepul()
    {
        return $this->belongsTo('App\Models\Pengepul', 'pengepul_id_pengepul', 'id_pengepul');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailPenjualans()
    {
        return $this->hasMany('App\Models\DetailPenjualan', 'jual_sampah_id_jual', 'id_jual');
    }
}
