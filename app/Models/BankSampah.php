<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property float $id_banksampah
 * @property float $kelurahan_id_kelurahan
 * @property string $nm_banksampah
 * @property string $almt_banksampah
 * @property float $telp
 * @property string $tgl_berdiri
 * @property string $jenis_sampah
 * @property string $nm_penggurus
 * @property float $jml_karyawan
 * @property int $jml_nasabah
 * @property float $jml_simpanan
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $createat
 * @property string $updateat
 * @property string $deleteat
 * @property Kelurahan $kelurahan
 */
class BankSampah extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bank_sampah';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_banksampah';

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
    protected $fillable = ['kelurahan_id_kelurahan', 'nm_banksampah', 'almt_banksampah', 'telp', 'tgl_berdiri', 'jenis_sampah', 'nm_penggurus', 'jml_karyawan', 'jml_nasabah', 'jml_simpanan', 'email', 'username', 'password', 'createat', 'updateat', 'deleteat'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelurahan()
    {
        return $this->belongsTo('App\Models\Kelurahan', 'kelurahan_id_kelurahan', 'id_kelurahan');
    }
}
