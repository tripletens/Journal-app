<?php

use Illuminate\Database\Seeder;
use App\Journals;
class JournalSeeder extends Seeder
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
        while($i < 12){
            Journals::create([
                'title' => Str_random(40),
                'description' => str_random(40),
                'link' => str_random(40),
                'field' => str_random(40),
                'institution' => str_random(40),
                'country' => str_random(40),
                'image' => str_random(40)
            ]);

            if($i == 12){
                break;
            }
            $i++;
        }
    }
}
