<?php

use App\MODELS\Gestion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(GestionSeeder::class);
        $this->call(HorarioSeeder::class);
        $this->call(NivelSeeder::class);
        $this->call(ProgramaSeeder::class);
    }
}
