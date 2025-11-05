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


                    'name'=>"hakim" ,//);
                    'email'=>"hakim@gmail.com" ,//)->unique();
                    // 'email_verified_at'=>"" ,//)->nullable();
                    'password'=>'$2y$12$KO89zCnh6rCYfBME0Z6AJeddfVK5toxrEsrdhQivCF5dg9gXmJUZi' ,//);
                    
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
                        

                    'firstname'=>"SEYE" ,//);
                    'lastname'=>"Abdoul" ,//);

                    'pseudo'=>"seyeabdoul226" ,//)->unique();
                    // $table->foreignId('user_id')->nullable()->index();

                    'adresse'=>"123ggh fz" ,//)->unique();
                    'telephone'=>"12 23 34 55" ,//)->unique();
                    


                        // "created_at"=>"2021-11-27 03:01:14",
                        // "updated_at"=>"2021-11-27 03:01:14"

                ],
                [
                    'firstname'=>"Konate" ,//);
                    'lastname'=>"Karim" ,//);

                    'pseudo'=>"KonateKarim" ,//)->unique();
                    // $table->foreignId('user_id')->nullable()->index();

                    'adresse'=>"1R3ggh fz" ,//)->unique();
                    'telephone'=>"13 23 94 55" ,//)->unique();
                ],

            ]);

        }

        if (1 === 1) {

            DB::table("superviseurs")->insert([

                [
                        // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",
                                        
                    'pseudo'=>"SEYE" ,//)->unique();

                    'user_id'=>1 ,//)->nullable()->index();
                    // $table->foreignId('role_id')->nullable()->index();

                    'telephone'=>"23 28 28 98" ,//)->unique();

                        // "created_at"=>"2021-11-27 03:01:14",
                        // "updated_at"=>"2021-11-27 03:01:14"

                ],
                [
                        // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",
                                        
                    'pseudo'=>"Hakim" ,//)->unique();

                    'user_id'=>2 ,//)->nullable()->index();
                    // $table->foreignId('role_id')->nullable()->index();

                    'telephone'=>"32 28 28 98" ,//)->unique();

                        // "created_at"=>"2021-11-27 03:01:14",
                        // "updated_at"=>"2021-11-27 03:01:14"

                ],
            ]);

        }

        if (1 === 1) {

            DB::table("sites")->insert([

                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"le site de kossodo" ,//);
                    'reference'=>"kossodo" ,//)->unique();

                    'localisation'=>"dfbd" ,//)->unique();

                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>1 ,//"" ,//)->nullable()->index();
                    'origin_superviseur_id'=>1, //"" ,//)->nullable()->index();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],



                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"le site de saaba" ,//);
                    'reference'=>"saaba" ,//)->unique();

                    'localisation'=>"fdggj" ,//)->unique();

                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>2 ,//"" ,//)->nullable()->index();
                    'origin_superviseur_id'=>2, //"" ,//)->nullable()->index();


                    // "created_at"=>"2021-11-27 03:01:14",
                    // "updated_at"=>"2021-11-27 03:01:14"


                ],

                [
                    // "id"=>"37ctga8e-b436-4df4-9913-9b4931d135c4",


                    'description'=>"le site de gounghin" ,//);
                    'reference'=>"gounghin" ,//)->unique();

                    'localisation'=>"dgndf" ,//)->unique();

                    'load_info'=>"" ,//)->nullable();
                    'pv_info'=>"" ,//)->nullable();
                    'battery_info'=>"" ,//)->nullable();
                    'grid_info'=>"" ,//)->nullable();
                    
                    'genset_info'=>"" ,//)->nullable();

                    'client_id'=>3 ,//"" ,//)->nullable()->index();
                    'origin_superviseur_id'=>2, //"" ,//)->nullable()->index();


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
