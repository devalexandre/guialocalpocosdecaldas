<?php
namespace App\Console\Commands;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
class AtualizadorCoordenadas extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'coordenadas:atualizar';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Atualiza as coordendas dos clientes";
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->info("...");
    }
}