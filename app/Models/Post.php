<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model {
    use HasFactory, Sluggable;

    // protected $fillable = ['title', 'excerpt', 'body']; // kolom itu yang hanya bisa di isi
    protected $guarded = ['id']; // kolom id gaboleh diisi
    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters){
        /*if(isset($filters['search']) ? $filters['search'] : false){
            return $query->where('title', 'like', '%' . $filters['search'] . '%')
                         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        }*/
        /*$query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });*/

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where(function($query) use ($search){
                $query->where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) => 
                $query->where('username', $author)
            )
        );
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    /*public function user(){
        return $this->belongsTo(User::class);
    }*/

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}