<?php

namespace Mariojgt\Onixpro\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnixBlock extends Model
{
    use HasFactory;

    public function blade()
    {
        $raw = str_replace('.blade.php', '', $this->filepath);
        $raw = str_replace('/', '.', $raw);
        $raw = str_replace('views.', '', $raw);
        return $raw;
    }
}
