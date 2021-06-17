<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property integer $kelurahan_id
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
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Kelurahan $kelurahan
 * @property AmbilTabungan[] $ambilTabungans
 * @property SetorSampah[] $setorSampahs
 */
class Nasabah extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'nasabah';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kelurahan_id', 'nama_nasabah', 'almt_nasabah', 'no_hp', 'jenis_kelamin', 'tmpt_lahir', 'tgl_lahir', 'status', 'agama', 'pekerjaan', 'no_rekening', 'saldo', 'password', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelurahan()
    {
        return $this->belongsTo('App\Models\Kelurahan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ambilTabungans()
    {
        return $this->hasMany('App\Models\AmbilTabungan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function setorSampahs()
    {
        return $this->hasMany('App\Models\SetorSampah');
    }
}
