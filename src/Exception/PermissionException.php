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
namespace HPlus\Permission\Exception;

use Throwable;

class PermissionException extends \Exception
{
    public function __construct(int $code = 0, string $message = null, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
