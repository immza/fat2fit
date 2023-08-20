<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $table = 'categories';

    protected $fillable = ['category_name', 'price'];
}


<?php

