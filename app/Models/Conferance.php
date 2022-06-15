<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Conferance extends Model
{
    use Translatable;
    use Resizable;

    public const PUBLISHED = 'PUBLISHED';

    protected $guarded = [];
}
