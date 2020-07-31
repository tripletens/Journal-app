<?php

use App\Articles;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $i = 1;
        while ($i < 12) {
            Articles::create([
                'title' => Str_random(40),
                'author_id' => rand(1, 10),
                'page_start' => rand(1, 10),
                'page_end' => rand(1,10),
                'body' => str_random(40),
                'journal_id' => rand(1, 10),
                'current_volume' => rand(1, 10)
            ]);

            if ($i == 12) {
                break;
            }
            $i++;
        }
    }
}
