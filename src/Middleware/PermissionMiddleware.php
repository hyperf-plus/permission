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
namespace HPlus\Permission\Middleware;

use HPlus\Permission\Contracts\PermissionInterface;
use HPlus\Permission\Exception\PermissionException;
use HPlus\Permission\Permission;
use Hyperf\HttpServer\Router\Dispatched;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class PermissionMiddleware implements MiddlewareInterface
{
    /**
     * @var Permission
     */
    protected $permission;

    public function __construct(PermissionInterface $permission)
    {
        $this->permission = $permission;
    }

    #laravel 权限每次都需要查询数据库，影响性能，此权限插件基于redis实现 性能大幅度提升
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        /** @var Dispatched $router */
        $router = $request->getAttribute(Dispatched::class);
        if (! $router->isFound()) {
            throw new NotFoundException('接口不存在');
        }
        $has = $this->permission->can($request->getMethod(), $router->handler->route);
        if (! $has) {
            throw new PermissionException(401, '您无权限');
        }
        return $handler->handle($request);
    }
}
