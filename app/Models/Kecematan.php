<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property float $id_kecamatan
 * @property float $kelurahan_id_kelurahan
 * @property string $nama_kecamatan
 * @property Kelurahan $kelurahan
 * @property Kelurahan $kelurahan
 */
class Kecematan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kecamatan';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_kecamatan';

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
    protected $fillable = ['kelurahan_id_kelurahan', 'nama_kecamatan'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kelurahan()
    {
        return $this->hashMany('App\Models\Kelurahan', 'kecamatan_id_kecamatan', 'id_kecamatan');
    }
}
