<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $nasabah_id
 * @property string $tgl_ambil
 * @property int $jml_ambil
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Nasabah $nasabah
 */
class Ambil_Tabungan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ambil_tabungan';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nasabah_id', 'tgl_ambil', 'jml_ambil', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nasabah()
    {
        return $this->belongsTo('App\Models\Nasabah');
    }
}
