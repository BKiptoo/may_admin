<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable(); // Add photo field
            $table->string('name')->default('')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('role')->default('member'); // Add role field with a default value of 'member'
            $table->enum('status', ['active', 'inactive'])->default('active'); // Add status field with enum values 'active' and 'inactive' and default value of 'active'
            $table->timestamps();
        });

    }
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
}
