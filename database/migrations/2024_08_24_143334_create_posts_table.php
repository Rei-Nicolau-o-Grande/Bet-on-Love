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
            $table->binary('content');
            $table->enum('status_post', array_column(StatusPost::cases(), "value"))
                ->default(StatusPost::Pending->value);
            $table->string('code')->unique();
            $table->dateTime('finish_date')->nullable();
            $table->decimal('amount', total: 15, places: 2)->nullable();
            $table->boolean('is_active')->default(true);
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
