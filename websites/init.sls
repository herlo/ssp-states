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

# the wp-config.php found in the wordpress/init.sls
# needs to be updated to include a config to check
# the 'HTTP_HOST' value and load this configuration
# file upon a match to (www,).sexysexypenguins.com. 

ssp_wp_conf:
  file.managed:
    - source: salt://wordpress/files/wp-config.ssp.php
    - name: /etc/wordpress/wp-config.ssp.php
    - user: root
    - group: root
    - mode: 644
    - require:
      - pkg: wordpress
      - file: wordpress

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
