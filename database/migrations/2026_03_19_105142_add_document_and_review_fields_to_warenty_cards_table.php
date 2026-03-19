<?php

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
        Schema::table('warenty_cards', function (Blueprint $table) {
            $table->string('document')->nullable()->after('purchase_form');
            $table->text('admin_remark')->nullable()->after('status');
            $table->timestamp('reviewed_at')->nullable()->after('admin_remark');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('warenty_cards', function (Blueprint $table) {
              $table->dropColumn(['document', 'admin_remark', 'reviewed_at']);
        });
    }
};
