<?php

use App\Enum\StatusPost;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->binary('description');
            $table->enum('status_post', array_column(StatusPost::cases(), "value"))
                ->default(StatusPost::Pending->value);
            $table->dateTime('finish_date')->nullable();
            $table->decimal('odd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
