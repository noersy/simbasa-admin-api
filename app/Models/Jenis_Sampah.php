<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $kategori_id
 * @property string $nm_sampah
 * @property string $satuan
 * @property int $hrg_jual
 * @property int $hrg_beli
 * @property float $stock
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Kategori $kategori
 * @property DetailPenjualan[] $detailPenjualans
 * @property DetailSetoran[] $detailSetorans
 */
class Jenis_Sampah extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'jenis_sampah';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['kategori_id', 'nm_sampah', 'satuan', 'hrg_jual', 'hrg_beli', 'stock', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailPenjualans()
    {
        return $this->hasMany('App\Models\DetailPenjualan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailSetorans()
    {
        return $this->hasMany('App\Models\DetailSetoran', 'setor_sampah_id');
    }
}
