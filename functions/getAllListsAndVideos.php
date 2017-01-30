<?php 
function getAllListsAndVideos()
{
  $mysqli = getConnexion();
  $query = 'SELECT L.nombre as lista, V.nombre AS video, V.duracion, V.url FROM `videos` AS V JOIN `listas_reproduccion` AS L ON V.id_lista = L.id';
  return $mysqli->query($query);
}