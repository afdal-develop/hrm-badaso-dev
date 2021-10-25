<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LunchProductCategoryTopping extends Model
{
    use HasFactory;

    protected $table = null ;
    protected $fillable = [ "lunch_product_category_id", "name"] ;

    /**
     * Constructor for setting the table name dynamically.
     */
    public function __construct(array $attributes = [])
    {
        $prefix = config('badaso.database.prefix');
        $this->table = $prefix.'data_types';
        parent::__construct($attributes);
    }

    public function lunchProductCategory(){ return $this->belongsTo(Uasoft\Badaso\Models\LunchProductCategoryTopping::class); }

}