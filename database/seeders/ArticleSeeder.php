<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $codes = ['FDLO14', 'FDLO12', 'FDLO10', 'FDLO08'];

        for ($i = 0; $i < 20; $i++) {
            Article::create([
                'code' => $codes[array_rand($codes)],
                'section_id' => 25,
                'serie_id' => 1,
                'family_description_id' => 1,
                'stranding_id' => 1,
                'conductor_pair_triad_id' => 1,
                'conductor_gauge_id' => 1,
                'voltage' => rand(100, 240),
                'temperature' => rand(20, 100),
                'grounding' => rand(0, 1),
                'shielded' => rand(0, 1),
                'armour' => rand(0, 1),
                'conductor_material' => 'Copper',
                'color_code' => 'Red',
                'jacket_material' => 'PVC',
            ]);
        }
    }
}
