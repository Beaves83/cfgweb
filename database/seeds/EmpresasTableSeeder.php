<?php

use Illuminate\Database\Seeder;
use App\Empresa;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Desarrolladoras
       $empresa = new Empresa();
       $empresa->nombre = 'Ubisoft';
       $empresa->esdesarrolladora = true;
       $empresa->save();
       
       $empresa = new Empresa();
       $empresa->nombre = 'Konami';
       $empresa->esdesarrolladora = true;
       $empresa->save();
       
       $empresa = new Empresa();
       $empresa->nombre = 'Platinum Games';
       $empresa->esdesarrolladora = true;
       $empresa->save();
       
       $empresa = new Empresa();
       $empresa->nombre = 'Bethesda';
       $empresa->esdesarrolladora = true;
       $empresa->save();
       
       //Distribuidoras
       $empresa = new Empresa();
       $empresa->nombre = 'Koch Media';
       $empresa->esdesarrolladora = false;
       $empresa->save();
       
       $empresa = new Empresa();
       $empresa->nombre = 'Ubisoft';
       $empresa->esdesarrolladora = false;
       $empresa->save();
       
       $empresa = new Empresa();
       $empresa->nombre = 'Sony Computer Entertaiment';
       $empresa->esdesarrolladora = false;
       $empresa->save();
       
       $empresa = new Empresa();
       $empresa->nombre = 'Banda Namco';
       $empresa->esdesarrolladora = false;
       $empresa->save();
    }
}
