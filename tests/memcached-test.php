<?php

/**
 * @file
 * Test if Memcached is available and working.
 */

$connect_success = FALSE;

if (class_exists('Memcached')) {
  $memcached = new Memcached;
  $success = $memcached->connect('127.0.0.1');

  if ($connect_success) {
    print 'Memcached connection successful';
    exit(0);
  }
}

if (!$connect_success) {
  echo 'Memcached not working properly';
  exit(1);
}
