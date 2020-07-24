<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "Creatina Universal 200g",
            'description' => "Suplemento de creatina que auxilia no ganho de força, resistência e massa muscular. Além disso, possui o selo de autenticidade creapure, que indica alta qualidade e pureza.",
            'price' => 99,
            'image' => "https://images.tcdn.com.br/img/img_prod/693992/180_creatina_universal_200g_83_1_20191122164546.png"
        ]);
        DB::table('products')->insert([
            'name' => "Whey Gold Standard 1,8kg",
            'description' => "Utiliza como fonte primária de proteína Whey Protein Isolada, a forma mais pura de Whey Protein que existe. Assim, cada porção de Gold Standard 100% Whey Protein da On contém 24g da mais pura proteína para ganho de massa muscular por dose.",
            'price' => 99,
            'image' => "https://d2vq4s943o8cb4.cloudfront.net/Custom/Content/Products/05/67/0567_whey-gold-100-optimum-nutrition-213_l5_636715950501807520.png"
        ]);
        DB::table('products')->insert([
            'name' => "Multivitamínico Growth",
            'description' => "Fonte de nutrientes indispensáveis para uma rotina saudável, o multivitamínico Growth Supplements não pode sair da sua mochila de treino.",
            'price' => 25,
            'image' => "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcT2lZ_dLfleOjgBR8ZyoafKMgGhDrJoL4iP_mKTZ9-9pc3tq7Jr0XnnNoRfT3-gJtjslZYoJAHDUw&usqp=CAc"
        ]);
    }
}
