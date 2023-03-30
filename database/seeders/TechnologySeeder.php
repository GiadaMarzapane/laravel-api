<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Technology;

// Helpers
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            'mare',
            'montagna',
            'città',
            'campagna',
            'lago'
        ];

        foreach ($technologies as $technology) {
            $newTechnologies = Technology::create([
                'name' => $technology,
                'slug' => Str::slug($technology)

            ]);
        };
    }
}
