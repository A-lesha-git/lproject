<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Simples;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call('SimpleSeeder');
        Model::reguard();
    }
}
class SimpleSeeder extends Seeder {

    public function run()
    {
        DB::table('simples')->delete();
        Simples::create([
            'name' => 'myName1',
            'desc' => 'myDescription1'
        ]);
        Simples::create([
            'name' => 'myName2',
            'desc' => 'myDescription2'
        ]);
         Simples::create([
            'title'=>'title3',
            'name' => 'myName3',
            'desc' => 'myDescription3'
        ]);
    }
}