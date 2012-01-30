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
Requires: httpd
Requires: mysql-server
Requires: mysql
Requires: mysql-devel
Requires: php53
Requires: mod_ssl
Requires: openssl-devel
Requires: php53-common
Requires: php-pecl-apc

%description

%prep
%setup -q

%build
make

%install
rm -rf $RPM_BUILD_ROOT
make install DESTDIR=${RPM_BUILD_ROOT}

%post
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
/var/www/helloworld
%doc


%changelog
* Sun Jan 29 2012  <emory@localhost.localdomain> - 
- Initial build.

