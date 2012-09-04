# SLS for mysql package

mysql-server:
  pkg:
    - installed
  service.running:
    - name: mysqld
    - enable: True
    - require:
      - pkg: mysql-server
      - user: mysql
      - file: mysql

# there appears to be a bug in the yum install of
# mysql-server where it doesn't create the user
# or group (even though a normal yum install does it fine)

mysql:
  group.present:
    - system: True
    - gid: 27
  user.present:
    - system: True
    - fullname: MySQL Server
    - shell: /sbin/nologin
    - home: /var/lib/mysql
    - uid: 27
    - gid: 27
    - require:
      - group: mysql
  file.directory:
    - names:
      - /var/lib/mysql
      - /var/run/mysqld
    - user: mysql
    - group: mysql
    - recurse:
      - user
      - group
    - require:
      - user: mysql
