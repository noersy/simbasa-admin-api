<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property float $id_kelurahan
 * @property float $kecamatan_id_kecamatan
 * @property string $nama_kelurahan
 * @property Kecamatan $kecamatan
 * @property BankSampah[] $bankSampahs
 * @property Kecamatan $kecamatan
 * @property Nasabah[] $nasabahs
 */
class Kelurahan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kelurahan';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_kelurahan';

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
    protected $fillable = ['kecamatan_id_kecamatan', 'nama_kelurahan'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bankSampahs()
    {
        return $this->hasMany('App\Models\BankSampah', 'kelurahan_id_kelurahan', 'id_kelurahan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kecamatan()
    {
        return $this->hasOne('App\Models\Kecamatan', 'kelurahan_id_kelurahan', 'id_kelurahan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nasabahs()
    {
        return $this->hasMany('App\Models\Nasabah', 'kelurahan_id_kelurahan', 'id_kelurahan');
    }
}
