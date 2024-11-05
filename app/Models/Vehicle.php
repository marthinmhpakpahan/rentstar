<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicle';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'vehicle_category_id',
        'company_id',
        'name',
        'police_no',
        'insurance',
        'price',
    ];

    protected $primaryKey = 'id';
    public $incrementing = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'modified_at';

    public $timestamps = true;

    public function category(): BelongsTo
    {
        return $this->belongsTo(VehicleCategory::class, "vehicle_category_id", "id");
    }

    public function images() {
        return $this->hasMany(VehicleImages::class);
    }
}
