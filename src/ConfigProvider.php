<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.plus
 *
 * @link     https://www.hyperf.plus
 * @document https://doc.hyperf.plus
 * @contact  4213509@qq.com
 * @license  https://github.com/hyperf/hyperf-plus/blob/master/LICENSE
 */
namespace HPlus\Permission;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                \HPlus\Permission\Contracts\PermissionInterface::class => \HPlus\Permission\Permission::class,
            ],
        ];
    }
}
