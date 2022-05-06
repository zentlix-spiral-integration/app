<?php

declare(strict_types=1);

namespace App\Bootloader;

use Spiral\Keeper\Bootloader\KeeperBootloader;

class BackendBootloader extends KeeperBootloader
{
    protected const NAMESPACE = 'backend';
}
