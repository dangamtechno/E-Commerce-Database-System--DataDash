<?php
require_once 'session.php';

if (sessionExists()) {
  echo getSessionUserID();
} else {
  echo '';
}
?>