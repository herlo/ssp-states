# custom websites

include:
  - nginx
  - wordpress

extend:
  nginx:
    service:
      - watch:
        - file: ssp_conf
        - file: fff_conf

ssp_conf:
  file.managed:
    - source: salt://websites/files/ssp.conf
    - name: /etc/nginx/conf.d/ssp.conf
    - user: nginx
    - group: nginx
    - mode: 644
    - require:
      - pkg: nginx
      - pkg: wordpress
      - service: spawn-fcgi

fff_conf:
  file.managed:
    - source: salt://websites/files/fff.conf
    - name: /etc/nginx/conf.d/fff.conf
    - user: nginx
    - group: nginx
    - mode: 644
    - require:
      - pkg: nginx
      - service: spawn-fcgi
