<?php

use App\Models\Profile;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('total_student');
            $table->text('desc');
            $table->string('name', 100);
            $table->enum('status', Profile::STATUSLIST);
            $table->enum('accreditation', ['A', 'B', 'C']);
            $table->text('address');
            $table->text('vision');
            $table->text('mission');
            $table->date('build_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
