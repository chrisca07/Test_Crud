<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
	   $limit = 5;
	   for($i= 0;$i < $limit;$i++){
		   DB::table('barang')->insert([
		   'nama barang'=> $faker->name,
		   'harga barang'=>$faker->harga,
		   'stock'=>$faker->stock,]);
    }
}}