<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "Administrator";
        $administrator->name = "Site Administrator";
        $administrator->email = "administrator@larashop.test";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("larashop");
        $administrator->avatar = "saat ini tidak ada file.png";
        $administrator->phone = "0821222222";
        $administrator->address = "Bogor, Btr Jaya";

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}
