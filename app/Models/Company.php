<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'id_card_image_path',
        'logo_image_path',
        'address',
    ];

    protected $table = 'company';

    protected $primaryKey = 'id';
    public $incrementing = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'modified_at';

    public $timestamps = true;
}
