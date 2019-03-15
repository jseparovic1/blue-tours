<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * App\Model
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model query()
 * @mixin \Eloquent
 */
class Model extends BaseModel
{
    protected $guarded = [];
}
