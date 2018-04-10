<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CalculateActiveUser extends Command
{
    protected $signature = 'larabbs:calculate-active-user';

    protected $description = '生成活躍用戶';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(User $user)
    {
        // 在命令行打印一行信息
        $this->info("開始計算...");

        $user->calculateAndCacheActiveUsers();

        $this->info("成功生成！");
    }
}
