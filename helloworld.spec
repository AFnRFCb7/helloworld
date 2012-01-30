Summary: A Hello World Symfony program
Name: helloworld
Version: 1
Release: 1
License: Proprietary
Group: Proprietary
URL: http://127.0.0.1
Source0: %{name}-%{version}.tar.gz
BuildRoot: %{_tmppath}/%{name}-%{version}-%{release}-root
BuildRequires: openssl
BuildRequires: git
Requires: httpd
Requires: mod_authz_ldap
Requires: mysql-server
Requires: mysql
Requires: mysql-devel
Requires: php53
Requires: php53-devel
Requires: mod_ssl
Requires: openssl-devel
Requires: php53-common
Requires: php53-pdo
Requires: php53-xml
Requires: php53-mbstring
Requires: php53-intl
Requires: php-pear
Requires: gcc
Requires: make

%description

%prep
%setup -q

%build
make

%install
rm -rf $RPM_BUILD_ROOT
make install DESTDIR=${RPM_BUILD_ROOT}

%post
/usr/bin/php /var/www/helloworld/app/console doctrine:schema:update --force
/usr/bin/php /var/www/helloworld/app/console assets:install web
/usr/bin/php /var/www/helloworld/app/console cache:clear
/usr/bin/php /var/www/helloworld/app/console fos:user:create admin admin@example.com password --super-admin
/usr/bin/php /var/www/helloworld/app/console fos:user:create testuser test@example.com password
/usr/bin/pecl install pdo
/usr/bin/pecl install pdo_mysql
service httpd start
service mysqld start
chkconfig httpd on
chkconfig mysqld on

%clean
rm -rf $RPM_BUILD_ROOT


%files
%defattr(-,root,root,-)
/etc/httpd/conf/ssl/helloworld.key
/etc/httpd/conf/ssl/helloworld.crt
/etc/httpd/conf.d/helloworld.conf
%dir /var/www/helloworld
%dir /var/www/helloworld/app
/var/www/helloworld/app/.htaccess
/var/www/helloworld/app/AppCache.php
/var/www/helloworld/app/AppKernel.php
/var/www/helloworld/app/autoload.php
/var/www/helloworld/app/bootstrap.php.cache
/var/www/helloworld/app/check.php
/var/www/helloworld/app/config
/var/www/helloworld/app/console
/var/www/helloworld/app/phpunit.xml.dist
/var/www/helloworld/app/Resources
%dir /var/www/helloworld/app/Application
%dir /var/www/helloworld/app/Application/Sonata
/var/www/helloworld/app/Application/Sonata/UserBundle
/var/www/helloworld/bin
/var/www/helloworld/deps
/var/www/helloworld/deps.lock
/var/www/helloworld/LICENSE
/var/www/helloworld/README.md
/var/www/helloworld/src
/var/www/helloworld/vendor
/var/www/helloworld/web
%attr(0755,apache,apache) /var/www/helloworld/app/cache
%attr(0755,apache,apache) /var/www/helloworld/app/logs
%doc


%changelog
* Sun Jan 29 2012  <emory@localhost.localdomain> - 
- Initial build.

