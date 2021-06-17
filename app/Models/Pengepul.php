<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property string $nm_pengepul
 * @property string $alamat_pengepul
 * @property string $telp_pengepul
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property JualSampah[] $jualSampahs
 */
class Pengepul extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pengepul';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nm_pengepul', 'alamat_pengepul', 'telp_pengepul', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jualSampahs()
    {
        return $this->hasMany('App\Models\JualSampah', 'pengepul_id_pengepul');
    }
}
