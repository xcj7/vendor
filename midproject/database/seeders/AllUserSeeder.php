<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alluser;

class AllUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Alluser::factory()->create([
            
            'id'=>1,
            'name'=>'Tushar',
            'email'=>'y@gmail.com',
            'phone' => '01867888888',
            'nid'=>'987654321',
            'address'=>'Dhaka',
            'type' => 'vendor' ,
            'status' => 'active' ,
            'password' => '12345678',
            'created_at' => NULL ,
            'updated_at' => NULL,


        ]);
        
    }
}
