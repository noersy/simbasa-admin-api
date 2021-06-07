<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property float $id_setor
 * @property string $nasabah_id_nasabah
 * @property string $tgl_setor
 * @property float $total_setor
 * @property Nasabah $nasabah
 * @property DetailSetoran[] $detailSetorans
 */
class SectorSampah extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'setor_sampah';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_setor';

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
    protected $fillable = ['nasabah_id_nasabah', 'tgl_setor', 'total_setor'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nasabah()
    {
        return $this->belongsTo('App\Models\Nasabah', 'nasabah_id_nasabah', 'id_nasabah');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailSetorans()
    {
        return $this->hasMany('App\Models\DetailSetoran', 'setor_sampah_id_setor', 'id_setor');
    }
}
