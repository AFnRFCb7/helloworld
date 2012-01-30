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
pecl install pdo
pecl install pdo_mysql
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
/var/www/helloworld/app/AppCache.php
/var/www/helloworld/app/AppKernel.php
/var/www/helloworld/app/autoload.php
/var/www/helloworld/app/bootstrap.php.cache
/var/www/helloworld/app/check.php
/var/www/helloworld/app/config
/var/www/helloworld/app/console
/var/www/helloworld/app/phpunit.xml.dist
/var/www/helloworld/app/Resources
/var/www/bin
/var/www/deps
/var/www/deps.lock
/var/www/LICENSE
/var/www/README.md
/var/www/src
/var/wwwvendor
/var/www/web

%attr(0755,apache,apache) /var/www/helloworld/app
%attr(0755,apache,apache) /var/www/helloworld/logs
%doc


%changelog
* Sun Jan 29 2012  <emory@localhost.localdomain> - 
- Initial build.

