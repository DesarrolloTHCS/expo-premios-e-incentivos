<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ClearUnusedLogosCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logos:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Eliminar logos no utilizados';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $folder = 'public/img/logos';

        //Archivos para mantener
        $keepFiles = ['a.png', 'b.png', 'c.png', 'd.png', 'e.png', 'f.png'];

        $files = Storage::allFiles($folder);

        foreach ($files as $file) {
            $fileName = pathinfo($file, PATHINFO_BASENAME);
            //Verificar que el archivo no exista en la lista a mantener
            if (!in_array($fileName, $keepFiles)) {
                Storage::delete($file);
                $this->info('Archivo eliminado: ' . $fileName);
            }
        }

        $this->info('Se han eliminado todos los archivos no utilizados en la carpeta de logos');
    }
}
