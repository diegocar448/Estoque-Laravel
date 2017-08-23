<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Categoria;


class DatabaseSeeder extends Seeder
{   
    public function run()
    {
        Model::unguard();

        $this->call('CategoriaTableSeeder');
        
    }
}
class CategoriaTableSeeder extends Seeder
{    
    public function run()
    {
        //Em run vou defenir o que vou inserir em meu BD
        Categoria::create(['nome' => 'Eletrodomestico']);
        Categoria::create(['nome' => 'Eletronica']);
        Categoria::create(['nome' => 'Brinquedo']);
        Categoria::create(['nome' => 'Esporte']);
    }
}