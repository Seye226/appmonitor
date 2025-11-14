<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // ------------------------

        $firstjet = false;
        $secondjet = true;
        $thirdjet = true;

        // if ($firstjet === 1 || 1 === 2) {
        if (1 === 1) {

            DB::table("users")->insert([
                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'name'=>"admin" ,//);
                    'email'=>"admin@gmail.com" ,//)->unique();
                    // 'email_verified_at'=>"" ,//)->nullable();
                    'password'=>'$2y$12$e8DSPI0o1YiuDMHllnH7ieEubU9YvPVBObLanvNZ5lAgr2BqgHqf2' ,//);
                    
                    // 'current_team_id'=>"" ,//)->nullable();
                    // 'profile_photo_path'=>"" ,//, 2048)->nullable();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],
                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'name'=>"seye" ,//);
                    'email'=>"seye@gmail.com" ,//)->unique();
                    // 'email_verified_at'=>"" ,//)->nullable();
                    'password'=>'$2y$12$l0HbLDEw2QPlkT0fnixVoueVsdjRDOgKrgATcvmwJDimsDznze6V6' ,//);
                    
                    // 'current_team_id'=>"" ,//)->nullable();
                    // 'profile_photo_path'=>"" ,//, 2048)->nullable();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],

                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'name'=>"abdoul" ,//);
                    'email'=>"abdoul@gmail.com" ,//)->unique();
                    // 'email_verified_at'=>"" ,//)->nullable();
                    'password'=>'$2y$12$6wNpj5hFLhVbjydL7iWEkuuhMWM4iulE.ebbGbPnId0PP/bIats4G' ,//);
                    
                    // 'current_team_id'=>"" ,//)->nullable();
                    // 'profile_photo_path'=>"" ,//, 2048)->nullable();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],

                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'name'=>"hakim" ,//);
                    'email'=>"hakim@gmail.com" ,//)->unique();
                    // 'email_verified_at'=>"" ,//)->nullable();
                    'password'=>'$2y$12$KO89zCnh6rCYfBME0Z6AJeddfVK5toxrEsrdhQivCF5dg9gXmJUZi' ,//);
                    
                    // 'current_team_id'=>"" ,//)->nullable();
                    // 'profile_photo_path'=>"" ,//, 2048)->nullable();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],

                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'name'=>"souleymane" ,//);
                    'email'=>"souleymane@gmail.com" ,//)->unique();
                    // 'email_verified_at'=>"" ,//)->nullable();
                    'password'=>'$2y$12$v7eTQmbvC8EqGPHERKkVQenyuFJnYkXtSUqV9c8jSBBk5gaps5V.C' ,//);
                    
                    // 'current_team_id'=>"" ,//)->nullable();
                    // 'profile_photo_path'=>"" ,//, 2048)->nullable();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],

                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'name'=>"bertrand" ,//);
                    'email'=>"bertrand@gmail.com" ,//)->unique();
                    // 'email_verified_at'=>"" ,//)->nullable();
                    'password'=>'$2y$12$Hfgn8ZYEyRbHju8oPuUhbe0mD2RklghbMdBm6prlhpqxgcQwsiQzW' ,//);
                    
                    // 'current_team_id'=>"" ,//)->nullable();
                    // 'profile_photo_path'=>"" ,//, 2048)->nullable();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],
                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'name'=>"kader" ,//);
                    'email'=>"kader@gmail.com" ,//)->unique();
                    // 'email_verified_at'=>"" ,//)->nullable();
                    'password'=>'$2y$12$szg5erOVQ3bgOnbFEpn5quwoCNue49qoHXYKRJLmcPnkBwpd9Dvqm' ,//);
                    
                    // 'current_team_id'=>"" ,//)->nullable();
                    // 'profile_photo_path'=>"" ,//, 2048)->nullable();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],
                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'name'=>"paul" ,//);
                    'email'=>"paul@gmail.com" ,//)->unique();
                    // 'email_verified_at'=>"" ,//)->nullable();
                    'password'=>'$2y$12$GSeDz.knNqMVAwVGKbCOJeS9Q4KTfbk./p1DfsAm1GXa5uXkRuoju' ,//);
                    
                    // 'current_team_id'=>"" ,//)->nullable();
                    // 'profile_photo_path'=>"" ,//, 2048)->nullable();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],


                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'name'=>"lionel" ,//);
                    'email'=>"lionel@gmail.com" ,//)->unique();
                    // 'email_verified_at'=>"" ,//)->nullable();
                    'password'=>'$2y$12$4drOSaSR5EPKKXi283QkuuTlozLEBobKvW8GqtAEPHkktCu8DF1jG' ,//);
                    
                    // 'current_team_id'=>"" ,//)->nullable();
                    // 'profile_photo_path'=>"" ,//, 2048)->nullable();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],

            ]);

        }


        if (1 === 1) {

            DB::table("clients")->insert([

                [
                        // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",
                        

                    'firstname'=>"Ouedraogo" ,//);
                    'lastname'=>"Abdoul" ,//);

                    'pseudo'=>"ouedraogoabdoul226" ,//)->unique();
                    // $table->foreignId('user_id')->nullable()->index();

                    'adresse'=>"1fg3ggh fz" ,//)->unique();
                    'telephone'=>"12 23 34 23" ,//)->unique();
                    
                    'user_id'=>3 ,//)->unique();


                        // "created_at"=>"2021-11-27 03:01:14",
                        // "updated_at"=>"2021-11-27 03:01:14"

                ],
                [
                    'firstname'=>"Konate" ,//);
                    'lastname'=>"Karim" ,//);

                    'pseudo'=>"KonateKarim" ,//)->unique();
                    // $table->foreignId('user_id')->nullable()->index();

                    'adresse'=>"et3ggh fz" ,//)->unique();
                    'telephone'=>"13 23 87 55" ,//)->unique();

                    'user_id'=>4 ,//)->unique();

                ],
                [
                    'firstname'=>"Traore" ,//);
                    'lastname'=>"Souleymane" ,//);

                    'pseudo'=>"TraoreSouleymane" ,//)->unique();
                    // $table->foreignId('user_id')->nullable()->index();

                    'adresse'=>"1hhjggh fz" ,//)->unique();
                    'telephone'=>"13 98 94 55" ,//)->unique();

                    'user_id'=>5 ,//)->unique();

                ],


                [
                    'firstname'=>"Pako" ,//);
                    'lastname'=>"Georges" ,//);

                    'pseudo'=>"PakoGeorges" ,//)->unique();
                    // $table->foreignId('user_id')->nullable()->index();

                    'adresse'=>"1fnnggh fz" ,//)->unique();
                    'telephone'=>"29 23 94 55" ,//)->unique();

                    'user_id'=>null ,//)->unique();
                    // 'user_id'=>5 ,//)->unique();

                ],

            ]);

        }

        if (1 === 1) {

            DB::table("superviseurs")->insert([

                [
                        // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",
                    
                    // 'pseudo'=>"SEYE" ,//)->unique();
                    'pseudo'=>"supPseudo1" ,//)->unique();

                    'user_id'=>6 ,//)->nullable()->index();
                    // $table->foreignId('role_id')->nullable()->index();

                    'telephone'=>"23 28 28 98" ,//)->unique();

                        // "created_at"=>"2021-11-27 03:01:14",
                        // "updated_at"=>"2021-11-27 03:01:14"

                ],
                [
                        // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",
                                        
                    // 'pseudo'=>"Hakim" 
                    'pseudo'=>"supPseudo2",//)->unique();


                    'user_id'=>7 ,//)->nullable()->index();
                    // $table->foreignId('role_id')->nullable()->index();

                    'telephone'=>"32 28 28 98" ,//)->unique();

                        // "created_at"=>"2021-11-27 03:01:14",
                        // "updated_at"=>"2021-11-27 03:01:14"

                ],
                [
                        // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",
                                        
                    // 'pseudo'=>"Abdoul" 
                    'pseudo'=>"supPseudo3",//)->unique();

                    'user_id'=>8 ,//)->nullable()->index();
                    // $table->foreignId('role_id')->nullable()->index();

                    'telephone'=>"72 28 28 98" ,//)->unique();

                        // "created_at"=>"2021-11-27 03:01:14",
                        // "updated_at"=>"2021-11-27 03:01:14"

                ],
                [
                        // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",
                                        
                    // 'pseudo'=>"Abdoul" 
                    'pseudo'=>"supPseudo4",//)->unique();

                    'user_id'=>null ,//)->nullable()->index();
                    // 'user_id'=>8 ,//)->nullable()->index();

                    // $table->foreignId('role_id')->nullable()->index();

                    'telephone'=>"92 58 28 98" ,//)->unique();

                        // "created_at"=>"2021-11-27 03:01:14",
                        // "updated_at"=>"2021-11-27 03:01:14"

                ],
            ]);

        }

        if (1 === 1) {

            DB::table("sites")->insert([
                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"le premier site de kossodo" ,//);
                    'reference'=>"kossodo01" ,//)->unique();

                    'adresse'=>"kossodo 01 KEID" ,//)->unique();
                    'localisation'=>"12.427005, -1.470854" ,//)->unique();

                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>1 ,//"" ,//)->nullable()->index();
                        // 'origin_superviseur_id'=>1, //"" ,//)->nullable()->index();
                    'superviseur_id'=>1, //"" ,//)->nullable()->index();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],
                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"le site de gounghin pris en charge en fin d'années 2024." ,//);
                    'reference'=>"gounghin01" ,//)->unique();

                    'adresse'=>"gounghin 01 JIK" ,//)->unique();
                    'localisation'=>"8.427005, -1.370854" ,//)->unique();


                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>1 ,//"" ,//)->nullable()->index();
                        // 'origin_superviseur_id'=>1, //"" ,//)->nullable()->index();
                    'superviseur_id'=>1, //"" ,//)->nullable()->index();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],



                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"le site de qui est à saaba" ,//);
                    'reference'=>"saaba01" ,//)->unique();

                    'adresse'=>"saaba 01 dgff" ,//)->unique();
                    'localisation'=>"9.428005, -1.410854" ,//)->unique();


                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>2 ,//"" ,//)->nullable()->index();
                    // 'origin_superviseur_id'=>2, //"" ,//)->nullable()->index();
                    'superviseur_id'=>1, //"" ,//)->nullable()->index();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],
                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"le premier site de qui est à tampouy" ,//);
                    'reference'=>"tampouy01" ,//)->unique();

                    'adresse'=>"tampouy 01 tjtj" ,//)->unique();
                    'localisation'=>"10.422105, -1.472254" ,//)->unique();


                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>2 ,//"" ,//)->nullable()->index();
                    // 'origin_superviseur_id'=>2, //"" ,//)->nullable()->index();
                    'superviseur_id'=>2, //"" ,//)->nullable()->index();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],

                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"Un autre site de gounghin prise a charge il y'a 4 mois dernier! A traiter vite!" ,//);
                    'reference'=>"gounghin02" ,//)->unique();

                    'adresse'=>"gounghin 02 KIKK" ,//)->unique();
                    'localisation'=>"11.423005, -1.420854" ,//)->unique();


                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>3 ,//"" ,//)->nullable()->index();
                    // 'origin_superviseur_id'=>2, //"" ,//)->nullable()->index();
                    'superviseur_id'=>2, //"" ,//)->nullable()->index();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],
                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"Un premier site de ouaga 2000 prise a charge il y'a 6 mois!" ,//);
                    'reference'=>"ouaga200001" ,//)->unique();


                    'adresse'=>"ouaga-2000 01 rhrf" ,//)->unique();
                    'localisation'=>"10.427005, -1.430154" ,//)->unique();


                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>3 ,//"" ,//)->nullable()->index();
                    // 'origin_superviseur_id'=>2, //"" ,//)->nullable()->index();
                    'superviseur_id'=>3, //"" ,//)->nullable()->index();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],


                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"Un autre site de ouaga 2000 prise a charge le mois dernier!" ,//);
                    'reference'=>"ouaga200002" ,//)->unique();

                    'adresse'=>"ouaga-2000 02 kkrfh" ,//)->unique();
                    'localisation'=>"11.427005, -2.470854" ,//)->unique();


                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>3 ,//"" ,//)->nullable()->index();
                    // 'origin_superviseur_id'=>2, //"" ,//)->nullable()->index();
                    'superviseur_id'=>4, //"" ,//)->nullable()->index();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],

                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"Un autre site de gounghin prise a charge il y'a 2 mois!" ,//);
                    'reference'=>"gounghin03" ,//)->unique();


                    'adresse'=>"gounghin 03 dgdg" ,//)->unique();
                    'localisation'=>"12.237005, -1.475554" ,//)->unique();


                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>4 ,//"" ,//)->nullable()->index();
                    // 'origin_superviseur_id'=>2, //"" ,//)->nullable()->index();
                    'superviseur_id'=>4, //"" ,//)->nullable()->index();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],
                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"Un autre site de gounghin prise a charge le mois dernier!" ,//);
                    'reference'=>"gounghin04" ,//)->unique();


                    'adresse'=>"gounghin 04 KEID" ,//)->unique();
                    'localisation'=>"12.427805, -1.470954" ,//)->unique();


                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>4 ,//"" ,//)->nullable()->index();
                        // 'origin_superviseur_id'=>2, //"" ,//)->nullable()->index();
                    'superviseur_id'=>null, //"" ,//)->nullable()->index();
                    // 'superviseur_id'=>4, //"" ,//)->nullable()->index();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],


            ]);

        }

        if (1 === 1) {

            DB::table("supervised_sites")->insert([


                [
                        // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'site_id'=>1, //"" ,//)->nullable()->index();
                    'superviseur_id'=>1, //"" ,//)->nullable()->index();


                        // "created_at"=>"2021-11-27 03:01:14",
                        // "updated_at"=>"2021-11-27 03:01:14"


                ],
            ]);

        }


    }
}
