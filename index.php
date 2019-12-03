<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  readfile("data.json");
  return;
}

readfile("index.html");
?>