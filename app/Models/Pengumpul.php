<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property float $id_pengepul
 * @property string $nm_pengepul
 * @property string $alamat_pengepul
 * @property string $telp_pengepul
 * @property JualSampah[] $jualSampahs
 */
class Pengumpul extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pengepul';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_pengepul';

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
    protected $fillable = ['nm_pengepul', 'alamat_pengepul', 'telp_pengepul'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jualSampahs()
    {
        return $this->hasMany('App\Models\JualSampah', 'pengepul_id_pengepul', 'id_pengepul');
    }
}
