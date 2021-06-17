<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $jenis_sampah_id
 * @property integer $jual_sampah_id
 * @property string $jml_jual
 * @property string $subtotal_jual
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property JenisSampah $jenisSampah
 * @property JualSampah $jualSampah
 */
class Detail_Penjualan extends Model
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
    protected $fillable = ['jenis_sampah_id', 'jual_sampah_id', 'jml_jual', 'subtotal_jual', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenisSampah()
    {
        return $this->belongsTo('App\Models\JenisSampah');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jualSampah()
    {
        return $this->belongsTo('App\Models\JualSampah');
    }
}
