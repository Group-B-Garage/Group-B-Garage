<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

class CarrosFKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Porsche',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Audi',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Lancia',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Mazda',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Fiat',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Toyota',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Ferrari',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Lotus',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Alfa Romeo',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Chevrolet',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Lamborghini',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Subaru',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Mitsubishi',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Nissan',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Ford',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Volkswagen',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'BMW',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Mercedes-Benz',
        ]);

        DB::table('tb_marcas')->insertGetId([
            'mar_marca' => 'Pontiac',
        ]);



        DB::table('tb_cores')->insertGetId([
            'cor_cor' => 'Preto',
        ]);

        DB::table('tb_cores')->insertGetId([
            'cor_cor' => 'Prata',
        ]);

        DB::table('tb_cores')->insertGetId([
            'cor_cor' => 'Azul',
        ]);

        DB::table('tb_cores')->insertGetId([
            'cor_cor' => 'Vermelho',
        ]);

        DB::table('tb_cores')->insertGetId([
            'cor_cor' => 'Branco',
        ]);
        DB::table('tb_cores')->insertGetId([
            'cor_cor' => 'Amarelo',
        ]);
        DB::table('tb_cores')->insertGetId([
            'cor_cor' => 'Verde',
        ]);



        DB::table('tb_categorias')->insertGetId([
            'cat_categoria' => 'Coupe',
        ]);

        DB::table('tb_categorias')->insertGetId([
            'cat_categoria' => 'Conversível',
        ]);

        DB::table('tb_categorias')->insertGetId([
            'cat_categoria' => 'Hatchback',
        ]);

        DB::table('tb_categorias')->insertGetId([
            'cat_categoria' => 'Sedan',
        ]);



        DB::table('tb_tipo_motor')->insertGetId([
            'tip_tipo_motor' => '4 cilindros em linha',
        ]);

        DB::table('tb_tipo_motor')->insertGetId([
            'tip_tipo_motor' => '6 cilindros em linha',
        ]);

        DB::table('tb_tipo_motor')->insertGetId([
            'tip_tipo_motor' => 'v6',
        ]);

        DB::table('tb_tipo_motor')->insertGetId([
            'tip_tipo_motor' => 'V8',
        ]);

        DB::table('tb_tipo_motor')->insertGetId([
            'tip_tipo_motor' => 'V10',
        ]);

        DB::table('tb_tipo_motor')->insertGetId([
            'tip_tipo_motor' => 'V12',
        ]);

        DB::table('tb_tipo_motor')->insertGetId([
            'tip_tipo_motor' => 'Boxer 4 cilindros',
        ]);

        DB::table('tb_tipo_motor')->insertGetId([
            'tip_tipo_motor' => 'Boxer 6 cilindros',
        ]);

        DB::table('tb_tipo_motor')->insertGetId([
            'tip_tipo_motor' => '12 cilindros Flat',
        ]);

        DB::table('tb_tipo_motor')->insertGetId([
            'tip_tipo_motor' => '5 cilindros em linha',
        ]);
        
        DB::table('tb_tipo_motor')->insertGetId([
            'tip_tipo_motor' => 'Rotativo',
        ]);



        DB::table('tb_tração')->insertGetId([
            'tra_tração' => 'Traseira',
        ]);

        DB::table('tb_tração')->insertGetId([
            'tra_tração' => 'Dianteira',
        ]);

        DB::table('tb_tração')->insertGetId([
            'tra_tração' => 'Nas quatro rodas',
        ]);

        DB::table('tb_tração')->insertGetId([
            'tra_tração' => '',
        ]);



        DB::table('tb_posicao_motor')->insertGetId([
            'pos_posicao_motor' => 'Dianteiro',
        ]);

        DB::table('tb_posicao_motor')->insertGetId([
            'pos_posicao_motor' => 'Traseiro',
        ]);

        DB::table('tb_posicao_motor')->insertGetId([
            'pos_posicao_motor' => 'Central',
        ]);
    }
}
