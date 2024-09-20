<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateEstructuraCodificacionTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:estructura_codificacion';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create estructura_codificacion table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Schema::create('estructura_codificacion', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->string('serie');
            $table->string('family_description');
            $table->string('stranding');
            $table->string('conductor_pair_triad');
            $table->string('conductor_gauge');
            $table->string('voltage');
            $table->string('insulation_material');
            $table->string('temperature');
            $table->string('grounding');
            $table->string('shielded');
            $table->string('armour');
            $table->string('conductor_material');
            $table->string('color_code');
            $table->string('jacket_material');
            $table->timestamps();
        });

        $this->info('Table estructura_codificacion created successfully.');
        return 0;
    }
}
