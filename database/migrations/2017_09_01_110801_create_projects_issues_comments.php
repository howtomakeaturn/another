<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsIssuesComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function($t){
            $t->increments('id');
            $t->string('name');
            $t->timestamps();
        });

        Schema::create('issues', function($t){
            $t->increments('id');
            $t->integer('project_id');
            $t->string('title');
            $t->integer('status');
            $t->timestamps();
        });

        Schema::create('comments', function($t){
            $t->increments('id');
            $t->text('content');
            $t->integer('issue_id');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');

        Schema::drop('issues');

        Schema::drop('comments');
    }
}
