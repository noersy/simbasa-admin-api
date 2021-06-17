<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property integer $nasabah_id
 * @property string $tgl_setor
 * @property float $total_setor
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Nasabah $nasabah
 * @property DetailSetoran[] $detailSetorans
 */
class Setor_Sampah extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'setor_sampah';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nasabah_id', 'tgl_setor', 'total_setor', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nasabah()
    {
        return $this->belongsTo('App\Models\Nasabah');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailSetorans()
    {
        return $this->hasMany('App\Models\DetailSetoran', 'jenis_sampah_id');
    }
}
