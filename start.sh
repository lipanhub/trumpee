sleep 1

#启动服务，例如apache2
#具体的启动命令，视系统环境而定
#/etc/init.d/apache2 start
#为了适应各种docker版本，mysql的启动命令建议如下（mysqld除外）
find /var/lib/mysql -type f -exec touch {} \; && service mysql start

flagfile=/var/www/html/wordpress.sql
#if [ -f $flagfile ]; then
#这里就是替换flag值为/root/flag.txt里的值（这是为动态flag做准备）
sed -i "s/flag{x*}/$(cat /root/flag.txt)/" $flagfile
#mysql导入sql文件（newwpasswd只是示例密码）
mysqladmin -u root password "529529"
mysql -uroot -p529529 -e "CREATE DATABASE IF NOT EXISTS wordpress"
mysql -uroot -p529529 wordpress < $flagfile
#删除sql文件(一般是要删除的) / 如果不是sql文件这里不需要删除
#rm -f $flagfile
#fi
/usr/sbin/apache2ctl -D FOREGROUND
#service apache2 start
#/bin/bash
