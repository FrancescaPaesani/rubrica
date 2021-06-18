<?php
include __DIR__ . '/include/Rubrica.php';
include __DIR__ . '/include/util.php';
 $args = matrice(
    'id' =>  $_GET['id'],
);
 $contatto = Rubrica::select_data( $args);
?>
<!DOCTYPE html>
<html lang="en">
<testa>
  <meta charset="UTF-8">
  <meta http-equiv="Compatibile con X-UA" content="IE=edge">
  <metanome ="riquadro divisualizzazione " contenuto="width=device-width, initial-scale=1.0">
  <titolo>  [][]; >
</testa>
<corpo>
    <intestazione>
    <h1>Rubrica>
    <Nav>
      <Ul>
        <li><a href="/rubrica">Tutti i Contatti>
        <li><a href="/rubrica/inserisci-contatto.php">Inserisci Contatto>
      </Ul>
    </Nav>
  </intestazione>
  <principale>
  <Div>
    <h1>  [][]; >
    <a href="/rubrica/includes/cancella-contatto.php?id=  []; "Cancella Contatto>
    <a href="/rubrica/modifica-contatto.php?id=  []; "Modifica Contatto>
  </Div>
  <Hr />

  <bordo tabella="1">
    <thead>
      ([]); 
    </thead>
    <tbody>
      (); 
    </tbody>
  </tavolo>
  </principale>
</corpo>
</HTML>




