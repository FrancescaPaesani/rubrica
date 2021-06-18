<?php
include __DIR__ . '/include/Rubrica.php';
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
  <titolo>Modifica Contatto>
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
    
if (isset($_GET['stato']) &&  $_GET['stato'] === 'ok'):
?>
      <div class="stato stato--ok">Contatto aggiornato con successo. >
    
elseif (isset($_GET['stato']) &&  $_GET['stato'] === 'ko'):
?>
      <div class="stato stato--ko">Ops! C'è stato un problema, riprova più tardi. >
    
endif;
?>
    <form action="include/contatti.php?id=  [][]; " ="">
      <etichetta per="nome">Nome>
      <input type="testo" nome="nome" id="nome" valore="  [][]; " >
      <etichetta per="telefono">Numero di Telefono>
      <input type="tel" name="telefono" id="telefono" value="  [][]; " >
      <Hr />
      <h2>Informazioni Aggiuntive>
      <etichetta per="organizzazione">Organizzazione>
      <input type="text" name="organizzazione" id="organizzazione" value="  [][]; ">
      <etichetta per="e-mail">e-mail >
      <input type="email" name="email" id="email" value="  [][]; ">
      <etichetta per="indirizzo">Indirizzo>
      <input type="text" name="indirizzo" id="indirizzo" value="  [][]; ">
      <etichetta per="compleanno">Compleanno>
      <input type="data" nome="compleanno" id="compleanno" valore="  [][]; ">
      <input type="submit" value="Aggiorna Contatto">
    </modulo>
  </principale>
</corpo>
</HTML>