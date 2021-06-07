<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property float $jenis_sampah_id_sampah
 * @property float $jual_sampah_id_jual
 * @property string $jml_jual
 * @property string $subtotal_jual
 * @property JenisSampah $jenisSampah
 * @property JualSampah $jualSampah
 */
class DetailPenjualan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'detail_penjualan';

    /**
     * @var array
     */
    protected $fillable = ['jenis_sampah_id_sampah', 'jual_sampah_id_jual', 'jml_jual', 'subtotal_jual'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenisSampah()
    {
        return $this->belongsTo('App\Models\JenisSampah', 'jenis_sampah_id_sampah', 'id_sampah');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jualSampah()
    {
        return $this->belongsTo('App\Models\JualSampah', 'jual_sampah_id_jual', 'id_jual');
    }
}
