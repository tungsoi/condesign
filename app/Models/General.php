<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use AdminBuilder;

    /**
     * Table name
     *
     * @var string
     */
    protected $table = "general";
    const INTRO = 1;
    const  GIOI_THIEU = 2;
    const LY_DO = 3;
    const DICH_VU = 4;
    /**
     * Fields
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'pictures',
        'type',
        'status'
    ];

    public function getPicturesAttribute($pictures)
    {
        if (is_string($pictures)) {
            return json_decode($pictures, true);
        }

        return $pictures;
    }

    public function setPicturesAttribute($pictures)
    {
        if (is_array($pictures)) {
            $this->attributes['pictures'] = json_encode($pictures);
        }
    }
}
