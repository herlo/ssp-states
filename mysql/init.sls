# SLS for mysql package

mysql-server:
  pkg:
    - latest
  service.running:
    - name: mysqld
