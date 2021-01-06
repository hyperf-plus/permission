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
if (! function_exists('permission')) {
    /**
     * @return \HPlus\Permission\Contracts\PermissionInterface
     */
    function permission()
    {
        return get_container(\HPlus\Permission\Contracts\PermissionInterface::class);
    }
}
