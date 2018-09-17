<?php

use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Type::insert([
            ['type_name' => 'text'],
            ['type_name' => 'email'],
            ['type_name' => 'message'],
            ['type_name' => 'submit'],
            ['type_name' => 'county'],
            ['type_name' => 'checkbox'],
            ['type_name' => 'url'],
            ['type_name' => 'hidden'],
            ['type_name' => 'password'],
            ['type_name' => 'radio'],
            ['type_name' => 'file'],
        ]);
    }
}
