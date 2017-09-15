# 北京理工大学信息与电子学院党建信息维护平台
### 功能
1.入党状态查询  
&emsp;&emsp;查询所属党支部，当前入党状态。  
2.志愿时长查询  
### 使用说明
#### Windwos   
* 安装WAMP(http://www.wampserver.com/en/)  
* 安装Composer  
* 安装Laravel，运行  
```
composer global require "laravel/installer"
```
#### Linux(Ubuntu 16.04)
* 搭建LAMP环境
```
sudo apt install apache2
sudo apt install mysql-server
sudo apt install php7.0 libapache2-mod-php7.0 php7.0-mysql
```
* 开启Apache2 Rewrite模块
```
sudo a2enmod rewrite
```
* 更改apache2设置
```
vim /etc/apache2/apache2.conf
```
将以下内容
```
<Directory /var/www/>
	Options Indexes FollowSymLinks
	AllowOverride all
	Require all granted
</Directory>
```
修改为
```
<Directory /var/www/>
	Options Indexes FollowSymLinks
	AllowOverride all
	Require all granted
</Directory>
```
* 运行以下命令完成Apache2的设置
```
service apache2 restart
```
### 注意事项
* Laravel教程见(https://laravel.com/docs/5.5)
* 工程迁移后需要在工程目录下运行
```
php artisan view:cache
php artisan cache:clear
```