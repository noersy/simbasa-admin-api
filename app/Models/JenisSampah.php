<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property float $id_sampah
 * @property string $kategori_id_kategori
 * @property string $nm_sampah
 * @property string $satuan
 * @property int $hrg_jual
 * @property int $hrg_beli
 * @property float $stock
 * @property Kategori $kategori
 * @property DetailPenjualan[] $detailPenjualans
 * @property DetailSetoran[] $detailSetorans
 */
class JenisSampah extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'jenis_sampah';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_sampah';

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
    protected $fillable = ['kategori_id_kategori', 'nm_sampah', 'satuan', 'hrg_jual', 'hrg_beli', 'stock'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'kategori_id_kategori', 'id_kategori');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailPenjualans()
    {
        return $this->hasMany('App\Models\DetailPenjualan', 'jenis_sampah_id_sampah', 'id_sampah');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailSetorans()
    {
        return $this->hasMany('App\Models\DetailSetoran', 'jenis_sampah_id_sampah', 'id_sampah');
    }
}
