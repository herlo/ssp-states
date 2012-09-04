base:
  '*':
    - resolver
    - nginx
    - websites
    - fastcgi
    - mysql
    - wordpress
    - private

# The private SLS tree is only available to users with proper access.
# If you haven't been granted explicit access, you don't have access.
# Please leave this git tree and configs immediately.

