<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
              
            [
                'name'=>'opp mobile',
            'price'=>'90000',
            'category'=>'mobile',
            'gallery'=>'https://images.pexels.com/photos/3066/smartphone-mockup-mobile-phone-screen.jpg?auto=compress&cs=tinysrgb&w=600',
            'description'=>'a smartphone with 4gb ram and much more ',
           
            ],
            [
                'name'=>'Lg tv',
            'price'=>'1000',
            'category'=>'mobile',
            'gallery'=>'https://images.pexels.com/photos/5721908/pexels-photo-5721908.jpeg?auto=compress&cs=tinysrgb&w=600',
            'description'=>'a smartphone with 4gb ram and much more ',
           
            ],
            [
                'name'=>'Lg tv',
            'price'=>'100000',
            'category'=>'mobile',
            'gallery'=>'https://images.pexels.com/photos/3066/smartphone-mockup-mobile-phone-screen.jpg?auto=compress&cs=tinysrgb&w=600',
            'description'=>'a smartphone with 4gb ram and much more ',
           
            ],
            [
                'name'=>'samsung tv',
            'price'=>'1000',
            'category'=>'mobile',
            'gallery'=>'https://www.lg.com/in/images/tvs/md07554886/gallery/75QNED86SQA-DZ-1-v1.jpg',
            'description'=>'a smartphone with 4gb ram and much more ',
           
            ],  
        ]);
        
    }
}
