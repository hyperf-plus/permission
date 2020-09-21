<?php
declare(strict_types=1);

namespace HPlus\Permission;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                \HPlus\Permission\Contracts\PermissionInterface::class => \HPlus\Permission\Permission::class
            ]
        ];
    }
}
