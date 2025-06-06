<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TruncateTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'table:truncate {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para truncar una tabla de la base de datos';

    /**
     * Execute the console command.
     */

    public function __construct(){
        parent::__construct();
    }

    public function handle()
    {
        $table = $this->argument('table');

        Schema::disableForeignKeyConstraints();
        DB::table($table)->truncate();
        Schema::enableForeignKeyConstraints();

        $this->info('La tabla ' . $table . ' ha sido truncada');
    }
}
