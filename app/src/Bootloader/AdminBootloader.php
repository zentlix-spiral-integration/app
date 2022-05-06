<?php

declare(strict_types=1);

namespace App\Bootloader;

use Spiral\Keeper\Bootloader\KeeperBootloader;

class AdminBootloader extends KeeperBootloader
{
    protected const NAMESPACE = 'admin';
}
