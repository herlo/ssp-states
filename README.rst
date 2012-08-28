SSP Salt State Tree
===================

This is the state tree for managing herlo.org and sexysexypenguins.org

This README will likely be expanded over time. But represents the 
salt state to manage the system. It is my hope to document each
state here for others to benefit. 

So far, this state tree has the following managed by salt::

- resolver: /etc/resolv.conf and /etc/sysconfig/network, etc.
- nginx: web server which delivers herlo.org and other sites
- mysql: database configurations

