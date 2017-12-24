<?php

$select = new AdminSQL();

$selectGlasses = $select->selectGlasses();

require_once('Views/listProductAdmin.php');