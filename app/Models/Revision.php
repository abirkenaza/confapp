<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Revision extends Model
{
    use Translatable;
    use Resizable;

    protected $translatable = ['title', 'domaine'];

    public const PUBLISHED = 'PUBLISHED';

    protected $guarded = [];

    public function prem_reviseur()
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'prem_reviseur_id', 'id');
    }

    public function sec_reviseur()
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'sec_reviseur_id', 'id');
    }
}
