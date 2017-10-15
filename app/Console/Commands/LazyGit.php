<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LazyGit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gp {desc?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GIT add and commit and push';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $desc = $this -> argument('desc');
        if (empty($desc)) {
            $desc = date('Y-m-d H:i:s');
        } else {
            $desc .= ' ' . date('Y-m-d H:i:s');
        }
        //执行git命令
        shell_exec('git add -A');
        shell_exec('git commit -m \''.$desc.'\'');
        shell_exec('git push all --all');
    }
}
