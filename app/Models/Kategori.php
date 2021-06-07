<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id_kategori
 * @property string $nm_kategori
 * @property JenisSampah[] $jenisSampahs
 */
class Kategori extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kategori';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_kategori';

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
    protected $fillable = ['nm_kategori'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jenisSampahs()
    {
        return $this->hasMany('App\Models\JenisSampah', 'kategori_id_kategori', 'id_kategori');
    }
}
