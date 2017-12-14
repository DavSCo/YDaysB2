<?php
require_once ('Models/GlassesSQL.php');

$selectVue = new GlassesSQL();

$vueGlasses = $selectVue->selectVue();


require_once ('Views/vue.php');