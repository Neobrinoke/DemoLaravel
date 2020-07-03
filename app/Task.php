<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Task
 * @package App
 *
 * @property string name
 */
class Task extends Model
{
    public function getStatusLabelAttribute() {
        return $this->status === 1 ? 'En cours' : 'Terminé';
    }
}
