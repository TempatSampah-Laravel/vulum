<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Lumen\Auth\Authorizable;


/**
 * @property bigIncrements $id 
 * @property string $name 
 * @property string $slug 
 * @property string $prefix_group 

 */
class Permissions extends Model
{
    use Authenticatable, Authorizable, HasFactory;
    use SoftDeletes;

    /**
     * Table Configuration
     * @var string
     */
    protected $table = 'permissions';
    protected $primaryKey = 'id';

    /**
     * List of allowed column to insert / update 
     * @var array
     */
    protected $fillable = [
        'name', 
        'slug', 
        'prefix_group'
    ];

    // disabled timestamps data
    public $timestamps = true;

    // disable update col id
    protected $guarded = ['id'];

    public function Columns() {
        return $this->fillable;
    }

}        
        