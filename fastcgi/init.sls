# fastcgi install and configuration
# common idiom for RPM-based distros

spawn-fcgi:
  pkg.installed:
    - name: spawn-fcgi
  file.managed:
    - name: /etc/sysconfig/spawn-fcgi
    - source: salt://fastcgi/files/spawn-fcgi
    - user: root
    - group: root
    - mode: 644
  service.running:
    - enable: True
    - require:
      - file: spawn-fcgi
