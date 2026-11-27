<?php
  function verif_role($role) {
    if (! isset($_SESSION['role']) && $role !== 'none') {
      return false;
    }
    if (isset($_SESSION['role']) && $role === 'none') {
      return false;
    }
    if (isset($_SESSION['role']) && $role !== 'any' && $role !== $_SESSION['role']) {
      return false;
    }
    return true;
  }
?>
