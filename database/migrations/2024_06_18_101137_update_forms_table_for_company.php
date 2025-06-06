<?php

use App\Models\Company;
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
        Schema::table('forms', function (Blueprint $table) {
            $table->dropColumn('message');
            $table->foreignIdFor(Company::class)->default(3)->after('id');

            //Definir la clave foránea
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->text('message')->nullable();
            $table->dropForeign(['company_id']);
            $table->dropColumn('company_id');
        });
    }
};
