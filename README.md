# permission
hyperf-plus-admin可选的权限插件,也可以用自己的permission组件

#### 安装成功后，只需添加PermissionMiddleware中间件即可

#### 此插件支持注解路由插件 <a href="https://github.com/hyperf-plus/route/">hyperf-plus-route</a>插件的注解参数

#### 如：控制器注解：ApiController
#### 方法注解：GetApi  PostApi PutApi DeleteApi （方法上配置级别优先于控制器配置）
- 1、userOpen 对用户开放url中的验证，
- 2、security 为true必须验证权限  false公共开放资源

#### 路由注解只在启动第一次时扫描并缓存，后续请求不会再做解析，提高性能