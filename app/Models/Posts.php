<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

    protected $guarded = [];

    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    public function openGoogle($crud = false)
    {
        return '<a class="btn btn-sm btn-danger" target="_blank" href="' . $this->id . '" title="Just a demo custom button."><i class="fa fa-search"></i>  Custom Link</a>';
    }

}
