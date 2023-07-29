<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact',
        'email'
    ];

    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $search = '%' . request('search') . '%';
            $query
                ->orWhere('name', 'like', $search)
                ->orWhere('contact', 'like', $search)
                ->orWhere('email', 'like', $search);
        }
    }
}
