# SLS for wordpress package

wordpress:
  pkg:
    - latest
  file.managed:
    - source: salt://wordpress/files/wp-config.php
    - name: /etc/wordpress/wp-config.php
    - user: root
    - group: root
    - mode: 644
    - require:
      - pkg: wordpress
      - service: mysql-server

wp_uploads_dir:
  file.directory:
    - name: /usr/share/wordpress/wp-content/uploads
    - user: nginx
    - group: nginx
    - mode: 2755
    - recurse:
      - user
      - group
    - require:
      - pkg: wordpress

wordpress_db:
  mysql_database:
    - present
    - name: WORDPRESS
    - require:
      - service: mysql-server


