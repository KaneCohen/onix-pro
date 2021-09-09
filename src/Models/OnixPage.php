<?php

namespace Mariojgt\Onixpro\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnixPage extends Model
{
    use HasFactory;

    /**
     * This fuction return the blade file usable path
     * example view($block->blade());
     * @return [string]
     */
    public function blade()
    {
        $raw = str_replace('.blade.php', '', $this->filepath);
        $raw = str_replace('/', '.', $raw);
        $raw = str_replace('views.', '', $raw);
        return $raw;
    }
}
