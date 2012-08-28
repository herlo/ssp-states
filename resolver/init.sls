# SLS for resolver data

/etc/resolv.conf:
  file.managed:
    - source: salt://resolver/files/resolv.conf
    - user: root
    - group: root
    - mode: 644

