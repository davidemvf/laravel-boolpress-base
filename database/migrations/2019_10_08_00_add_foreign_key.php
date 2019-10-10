<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('posts', function (Blueprint $table) {
          $table -> bigInteger('category_id') -> unsigned() -> index();
          $table -> foreign('category_id', 'categoryPost')
                 -> references('id')
                 -> on('categories');
      });

      Schema::table('post_tag', function (Blueprint $table) {
        $table -> bigInteger('post_id') -> unsigned() -> index();
        $table -> foreign('post_id', 'post_tag_post')
               -> references('id')
               -> on('posts');

        $table -> bigInteger('tag_id') -> unsigned() -> index();
        $table -> foreign('tag_id', 'post_tag_tag')
               -> references('id')
               -> on('tags');
      

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {

          $table -> dropForeign('categoryPost');
          $table -> dropColumn('category_id');
        });

        Schema::table('posts', function (Blueprint $table) {
          $table -> dropForeign('post_tag_post');
          $table -> dropColumn('post_id');
          $table -> dropForeign('post_tag_tag');
          $table -> dropColumn('tag_id');
        });
    }
}
