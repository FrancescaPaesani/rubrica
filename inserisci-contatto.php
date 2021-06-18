<!DOCTYPE html>
<html lang="en">
<testa>
  <meta charset="UTF-8">
  <meta http-equiv="Compatibile con X-UA" content="IE=edge">
  <metanome ="riquadro divisualizzazione " contenuto="width=device-width, initial-scale=1.0">
  <titolo>Aggiungi Contatto>
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
      <div class="stato stato--ok">Contatto aggiunto con successo. >
    
elseif (isset($_GET['stato']) &&  $_GET['stato'] === 'ko'):
?>
      <div class="stato stato--ko">Ops! C'è stato un problema, riprova più tardi. >
    
endif;
?>
    <form action="include/contatti.php" metodo="POST">
      <etichetta per="nome">Nome>
      <input type="testo" nome="nome" id="nome" obbligatorio>
      <etichetta per="telefono">Numero di Telefono>
      <input type="tel" name="telefono" id="telefono" required>
      <Hr />
      <h2>Informazioni Aggiuntive>
      <etichetta per="organizzazione">Organizzazione>
      <input type="testo" nome="organizzazione" id="organizzazione">
      <etichetta per="e-mail">e-mail >
      <input type="email" name="email" ID=" email">
      <etichetta per="indirizzo">Indirizzo>
      <input type="testo" nome="indirizzo" id="indirizzo">
      <etichetta per="compleanno">Compleanno>
      <input type="data" nome="compleanno" id="compleanno">
      <input type="submit" value="Aggiungi Contatto">
    </modulo>
  </principale>
</corpo>
</HTML>