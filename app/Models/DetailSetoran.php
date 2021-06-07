<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property float $setor_sampah_id_setor
 * @property float $jenis_sampah_id_sampah
 * @property string $jml_setor
 * @property string $subtotal_setor
 * @property JenisSampah $jenisSampah
 * @property SetorSampah $setorSampah
 */
class DetailSetoran extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'detail_setoran';

    /**
     * @var array
     */
    protected $fillable = ['setor_sampah_id_setor', 'jenis_sampah_id_sampah', 'jml_setor', 'subtotal_setor'];

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
    public function setorSampah()
    {
        return $this->belongsTo('App\Models\SetorSampah', 'setor_sampah_id_setor', 'id_setor');
    }
}
