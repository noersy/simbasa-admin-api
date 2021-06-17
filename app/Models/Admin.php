<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $username
 * @property string $password
 */
class Admin extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'admin';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'username';

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
    protected $fillable = ['password'];

}
