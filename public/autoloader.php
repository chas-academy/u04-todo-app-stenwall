<?php

function autoloader($namespace)
{
  $firstSlash = strpos($namespace, "\\") + 1;
  $classpath = substr($namespace, $firstSlash);
  $classpath = str_replace("\\", "/", $classpath);
  $classfilename = __DIR__ . "/src/" . $classpath . ".php";
  require_once $classfilename;
}
spl_autoload_register("autoloader");

?>