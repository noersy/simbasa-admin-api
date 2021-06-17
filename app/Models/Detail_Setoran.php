<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $setor_sampah_id
 * @property integer $jenis_sampah_id
 * @property string $jml_setor
 * @property string $subtotal_setor
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property SetorSampah $setorSampah
 * @property JenisSampah $jenisSampah
 */
class Detail_Setoran extends Model
{
    use HasFactory, SoftDeletes, Notifiable;


    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'detail_setoran';

    /**
     * @var array
     */
    protected $fillable = ['setor_sampah_id', 'jenis_sampah_id', 'jml_setor', 'subtotal_setor', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function setorSampah()
    {
        return $this->belongsTo('App\Models\SetorSampah', 'jenis_sampah_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenisSampah()
    {
        return $this->belongsTo('App\Models\JenisSampah', 'setor_sampah_id');
    }
}
