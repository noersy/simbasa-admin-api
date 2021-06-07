<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id_nasabah
 * @property float $kelurahan_id_kelurahan
 * @property string $nama_nasabah
 * @property string $almt_nasabah
 * @property float $no_hp
 * @property string $jenis_kelamin
 * @property string $tmpt_lahir
 * @property string $tgl_lahir
 * @property string $status
 * @property string $agama
 * @property string $pekerjaan
 * @property float $no_rekening
 * @property int $saldo
 * @property string $password
 * @property Kelurahan $kelurahan
 * @property AmbilTabungan[] $ambilTabungans
 * @property SetorSampah[] $setorSampahs
 */
class Nasabah extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'nasabah';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_nasabah';

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
    protected $fillable = ['kelurahan_id_kelurahan', 'nama_nasabah', 'almt_nasabah', 'no_hp', 'jenis_kelamin', 'tmpt_lahir', 'tgl_lahir', 'status', 'agama', 'pekerjaan', 'no_rekening', 'saldo', 'password'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelurahan()
    {
        return $this->belongsTo('App\Models\Kelurahan', 'kelurahan_id_kelurahan', 'id_kelurahan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ambilTabungans()
    {
        return $this->hasMany('App\Models\AmbilTabungan', 'nasabah_id_nasabah', 'id_nasabah');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function setorSampahs()
    {
        return $this->hasMany('App\Models\SetorSampah', 'nasabah_id_nasabah', 'id_nasabah');
    }
}
