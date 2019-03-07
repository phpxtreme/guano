<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Users Table
     *
     * @var string
     */
    private $table = 'users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('first_name', 25)
                ->nullable(false);

            $table->string('last_name', 25)
                ->nullable(false);

            $table->string('email', 60)
                ->nullable(false);

            $table->text('password')
                ->nullable(false);

            $table->boolean('active')
                ->default(true);

            $table->timestamps();

            $table->index(['email']);
            $table->unique(['email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
