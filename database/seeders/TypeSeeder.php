<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Type;

// Helpers
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Aereo',
            'Treno',
            'Macchina',
            'Nave'
        ];

        foreach ($types as $element) {
            $newType = Type::create([
                'name' => $element,
                'slug' => Str::slug($element)
            ]);
        };
    }
}