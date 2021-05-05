<?php

use Illuminate\Database\Seeder;
use App\sysuser;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        sysuser::insert([
            'uname'=> 'admin',
            'namalengkap' => 'Administrator',
            'email' => 'admin@uts.com',
            'upass' => sha1('admin')
        ]);
        // $this->call(UserSeeder::class);
    }
}
