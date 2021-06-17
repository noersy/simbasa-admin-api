<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property integer $kecamatan_id
 * @property string $nama_kelurahan
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Kecamatan $kecamatan
 * @property BankSampah[] $bankSampahs
 * @property Kecamatan[] $kecamatans
 * @property Nasabah[] $nasabahs
 */
class Kelurahan extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kelurahan';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kecamatan_id', 'nama_kelurahan', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bankSampahs()
    {
        return $this->hasMany('App\Models\BankSampah');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nasabahs()
    {
        return $this->hasMany('App\Models\Nasabah');
    }
}
