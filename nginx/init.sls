# SLS for nginx webserver

nginx:
  group.present:
    - system: True
    - gid: 301
  user.present:
    - system: True
    - fullname: nginx web server
    - shell: /sbin/nologin
    - home: /var/lib/nginx
    - uid: 301
    - gid: 301
    - require:
      - group: nginx
  pkg:
    - latest
    - require:
      - user: nginx
  service.running:
    - require:
      - pkg: nginx
