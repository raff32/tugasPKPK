<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Model
{
    use HasFactory;

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            // $table->text('komentar');
            // $table->unsignedBigInteger('parent_id')->nullable(); 
            $table->timestamps();
        });
    }

    protected $fillable = [
        'nama',
        'email',
        'komentar',
        'parent_id'
    ];

    public function down()
    {
        Schema::dropIfExists('comments');
    }
    
    private static $blog_posts = [
        [
            "title" => "Judul Jurnal Pertama",
            "slug" => "judul-jurnal-pertama",
            "author" => "M. Nur Arafah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga cumque voluptas necessitatibus reiciendis dolores soluta ipsum iusto, dignissimos sequi facere, modi pariatur. Vero animi quo distinctio tempore nobis similique voluptatum."
        ],
        [
            "title" => "Judul Jurnal Kedua",
            "slug" => "judul-jurnal-kedua",
            "author" => "M. Nur Arafah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci inventore consectetur quos ducimus sunt unde delectus dolor, deleniti sint maxime deserunt fugit laboriosam doloremque dolorum, consequuntur temporibus perferendis est! Sunt."
        ]
    ];
 
    public static function all($columns = ['*'])
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
