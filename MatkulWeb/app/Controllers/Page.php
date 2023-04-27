<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpParser\Node\Stmt\Echo_;

class Page extends BaseController
{
    public function about()
    {
        echo "Nama Saya Elmira Akmala";
    }
}
