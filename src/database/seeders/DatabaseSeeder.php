<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // DBファサードをインポート

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 外部キー制約を解除
        Schema::disableForeignKeyConstraints();

        // シーディング前に全レコードを削除
        DB::table('conditions')->truncate();
        DB::table('categories')->truncate();
        DB::table('users')->truncate();

        // 外部キー制約を有効化
        Schema::enableForeignKeyConstraints();

        // ダミーデータ作成
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ConditionsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
    }
}
