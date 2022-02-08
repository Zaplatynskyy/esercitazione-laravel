<?php

use Illuminate\Database\Seeder;
use App\Computer;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $computers = config('computers');

        foreach($computers as $computer) {
            $newcomputer = new Computer();
            $newcomputer->brand = $computer['brand'];
            $newcomputer->series = $computer['series'];
            $newcomputer->screen_size = $computer['screen_size'];
            $newcomputer->resolution = $computer['resolution'];
            $newcomputer->processor = $computer['processor'];
            $newcomputer->ram = $computer['ram'];
            $newcomputer->type_memory = $computer['type_memory'];
            $newcomputer->graphics_card = $computer['graphics_card'];
            $newcomputer->price = $computer['price'];
            $newcomputer->save();
        }
    }

    
}
