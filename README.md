# permission
hyperf-plus-admin可选的权限插件,也可以用自己的permission组件

安装成功后，只需添加PermissionMiddleware中间件即可

此插件支持注解路由插件 <a href="https://github.com/hyperf-plus/route/">hyperf-plus-route</a>插件的注解参数
如：注解 ApiController
- 1、ignore   忽略该控制器下/节点下权限验证
- 2、userOpen 对用户开放url中的验证，
- 3、security 为true必须验证权限  false公共开放资源