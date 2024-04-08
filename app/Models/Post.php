<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use function Laravel\Prompts\select;

class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;


    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function all()
    {
        $test=1;
        return cache()->rememberForever('posts.all', function (){
            /** @var Collection $posts */
            $posts = collect(File::files(resource_path("posts/")));
            $posts = $posts
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                ))
                ->sortByDesc('date');
            return $posts;
        });
    }

    public static function find($slug)
    {
        return self::all()->firstWhere('slug',$slug);
    }

}
