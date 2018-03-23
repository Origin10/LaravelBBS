<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{

    public function up()
    {
      $categories = [
          [
              'name'        => '分享',
              'description' => '分享創建，分享發現',
          ],
          [
              'name'        => '教學',
              'description' => '開發技巧、推薦擴展包',
          ],
          [
              'name'        => '問答',
              'description' => '請保持友善，互幫互助',
          ],
          [
              'name'        => '公告',
              'description' => '站點公告',
          ],
      ];

      DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
