<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;

use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // $cholid = User::create([
        //     "name" => "M.Cholid Din Nur Rahman",
        //     "username" => "cholid.dnr",
        //     "job" => "Web Developer",
        //     "avatar" => "https://ui-avatars.com/api/?name=M.Cholid+Din+Nur+Rahman",
        //     "email" => "cholid.dnr@gmail.com",
        //     // "password" => Hash::make("password"),
        //     // "email_verified_at" => now(),
        //     "remember_token" => \Illuminate\Support\Str::random(10),
        // ]);

        $cat1 = Category::create([
            "title" => "Web Development",
            "slug" => "web-development",
            "description" => "Web Development Category",
        ]);
        $cat2 = Category::create([
            "title" => "UI/UX Design",
            "slug" => "ui-ux-design",
            "description" => "UI/UX Design Category",
        ]);
        $cat3 = Category::create([
            "title" => "Laravel",
            "slug" => "laravel",
            "description" => "Laravel Category",
        ]);
        Article::factory(100)->recycle([
            User::factory(9)->create(),
            // $cholid,
            $cat1,
            $cat2,
            $cat3,

        ])->create();

    }
}
