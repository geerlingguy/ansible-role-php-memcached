# Ansible Role: PHP-Memcached

[![Build Status](https://travis-ci.org/geerlingguy/ansible-role-php-memcached.svg?branch=master)](https://travis-ci.org/geerlingguy/ansible-role-php-memcached)

Installs PHP Memcached support on RedHat/CentOS/Debian/Ubuntu.

## Requirements

None.

## Role Variables

Available variables are listed below, along with default values (see `defaults/main.yml`):

    TODO

## Dependencies

  - geerlingguy.php

## Example Playbook

    - hosts: webservers
      roles:
        - { role: geerlingguy.php-memcached }

## License

MIT / BSD

## Author Information

This role was created in 2014 by [Jeff Geerling](http://jeffgeerling.com/), author of [Ansible for DevOps](http://ansiblefordevops.com/).
