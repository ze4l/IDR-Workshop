<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MontirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('montirs')->insert([
            'namamontir'=>'Agung',
            'usiamontir'=>'45',
            'divisi'=>'Mekanik AC'
            
        ]);
    }
}
