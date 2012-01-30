
CAT = /bin/cat
CP = /bin/cp
GIT = /usr/bin/git
GUNZIP = /bin/gunzip
GZIP = /bin/gzip
MKDIR = /bin/mkdir
OPENSSL = /usr/bin/openssl
PHP = /usr/bin/php
RPMBUILD = /usr/bin/rpmbuild
SCP = /usr/bin/scp
SED = /bin/sed
SSH = /usr/bin/ssh
TAR = /bin/tar
TOUCH = /bin/touch
WGET = /usr/bin/wget

BUILD_DIRECTORY = build
DESTDIR = install


all : helloworld.conf ${BUILD_DIRECTORY}/helloworld.key ${BUILD_DIRECTORY}/helloworld.crt

clean :
	${RM} --verbose --recursive --force build

${BUILD_DIRECTORY}/allegheny : ${BUILD_DIRECTORY}/rpmbuild/RPMS/i386/helloworld-1-1.i386.rpm
	${SCP} $< allegheny:/tmp
	# ${SSH} allegheny rpm -Uvh http://download.fedora.redhat.com/pub/epel/5/i386/epel-release-5-4.noarch.rpm
	${SSH} allegheny yum install -y --nogpgcheck /tmp/helloworld-1-1.i386.rpm
	${TOUCH} $@

${BUILD_DIRECTORY}/rpmbuild/RPMS/i386/helloworld-1-1.i386.rpm : ${BUILD_DIRECTORY}/rpmbuild/SPECS/helloworld-1.spec ${BUILD_DIRECTORY}/rpmbuild/SOURCES/helloworld-1.tar.gz ${BUILD_DIRECTORY}/rpmrc
	${MKDIR} --parents $(@D)
	${MKDIR} --parents ${BUILD_DIRECTORY}/rpmbuild/SRPMS
	${MKDIR} --parents ${BUILD_DIRECTORY}/rpmbuild/BUILD
	${RPMBUILD} --verbose --rcfile ${BUILD_DIRECTORY}/rpmrc -ba ${BUILD_DIRECTORY}/rpmbuild/SPECS/helloworld-1.spec

${BUILD_DIRECTORY}/rpmbuild/SPECS/helloworld-1.spec : helloworld.spec
	${MKDIR} --verbose --parents $(@D)
	${CP} --verbose $< $@

${BUILD_DIRECTORY}/rpmrc : rpmrc ${BUILD_DIRECTORY}/rpmmacros
	${SED} -e "s#RPMMACROS#${BUILD_DIRECTORY}/rpmmacros#" -e "w$@" $<

${BUILD_DIRECTORY}/rpmmacros : rpmmacros
	${SED} -e "s#%{_usrsrc}/redhat#${PWD}/${BUILD_DIRECTORY}/rpmbuild#" $< > $@

${BUILD_DIRECTORY}/helloworld-1/% : %
	${MKDIR} --verbose --parents $(@D)
	${CP} --verbose --recursive $^ $@

${BUILD_DIRECTORY}/helloworld-1.tar : ${BUILD_DIRECTORY}/helloworld-1/README ${BUILD_DIRECTORY}/helloworld-1/Makefile ${BUILD_DIRECTORY}/helloworld-1/helloworld.conf ${BUILD_DIRECTORY}/helloworld-1/helloworld.ini ${BUILD_DIRECTORY}/helloworld-1/helloworld
	${MKDIR} --verbose --parents $(@D)
	${TAR} --create --file $@ --verbose --directory ${BUILD_DIRECTORY} helloworld-1

${BUILD_DIRECTORY}/rpmbuild/SOURCES/helloworld-1.tar.gz : ${BUILD_DIRECTORY}/helloworld-1.tar
	${MKDIR} --verbose --parents $(@D)
	${GZIP} -9 --to-stdout $< > $@

${BUILD_DIRECTORY}/helloworld.key ${BUILD_DIRECTORY}/helloworld.crt :
	${MKDIR} --verbose --parents $(@D)
	${OPENSSL} req -new -x509 -days 365 -sha1 -newkey rsa:1024 -nodes -keyout ${BUILD_DIRECTORY}/helloworld.key -out ${BUILD_DIRECTORY}/helloworld.crt -subj '/O=Company/OU=Department/CN=www.example.com'

${BUILD_DIRECTORY}/Symfony_Standard_Vendors_2.0.9.tgz :
	${WGET} --verbose --directory-prefix=${BUILD_DIRECTORY} http://symfony.com/download?v=Symfony_Standard_Vendors_2.0.9.tgz

${BUILD_DIRECTORY}/Symfony_Standard_Vendors_2.0.9.tar : ${BUILD_DIRECTORY}/Symfony_Standard_Vendors_2.0.9.tgz
	${GUNZIP} --to-stdout --verbose $< > $@

${BUILD_DIRECTORY}/Symfony : ${BUILD_DIRECTORY}/Symfony_Standard_Vendors_2.0.9.tar
	${TAR} --verbose --directory ${BUILD_DIRECTORY} --extract --file $<

helloworld-directory : ${BUILD_DIRECTORY}/Symfony
	${CP} --verbose --recursive $< $@
	${PHP} $@/bin/vendors install --reinstall
	${PHP} $@/app/console sonata:easy-extends:generate SonataUserBundle

install : ${DESTDIR}/etc/httpd/conf.d/helloworld.conf ${DESTDIR}/etc/httpd/conf/ssl/helloworld.key ${DESTDIR}/etc/httpd/conf/ssl/helloworld.crt ${DESTDIR}/var/www/helloworld

${DESTDIR}/etc/php.d/helloworld.ini : helloworld.ini
	${MKDIR} --verbose --parents $(@D)
	${CP} --verbose $< $@

${DESTDIR}/etc/httpd/conf.d/helloworld.conf : helloworld.conf
	${MKDIR} --verbose --parents $(@D)
	${CP} --verbose $< $@

${DESTDIR}/etc/httpd/conf/ssl/helloworld.% : ${BUILD_DIRECTORY}/helloworld.%
	${MKDIR} --verbose --parents $(@D)
	${CP} --verbose $< $@

${DESTDIR}/var/www/helloworld : helloworld
	${MKDIR} --verbose --parents $(@D)
	${CP} --recursive --verbose $< $@

${DESTDIR}/var/www/helloworld/app/config/parameters.ini : parameters.ini
	${MKDIR} --verbose --parents $(@D)
	${CP} --verbose $< $@
