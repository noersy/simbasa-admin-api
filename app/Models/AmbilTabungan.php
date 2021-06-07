<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id_ambil
 * @property string $nasabah_id_nasabah
 * @property string $tgl_ambil
 * @property int $jml_ambil
 * @property Nasabah $nasabah
 */
class AmbilTabungan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ambil_tabungan';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_ambil';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nasabah_id_nasabah', 'tgl_ambil', 'jml_ambil'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nasabah()
    {
        return $this->belongsTo('App\Models\Nasabah', 'nasabah_id_nasabah', 'id_nasabah');
    }
}
