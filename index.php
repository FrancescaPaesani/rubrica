<! DOCTYPE html>
<html lang="en">
<testa>
  <meta charset="UTF-8">
  <meta http-equiv="Compatibile con X-UA" content="IE=edge">
  <metanome ="riquadro divisualizzazione " contenuto="width=device-width, initial-scale=1.0">
  <titolo>Rubrica Contatti>
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
    
include __DIR__ . '/include/Rubrica.php';
include __DIR__ . '/include/util.php';
 $contatti = Rubrica::select_data();
if (isset($_GET['statocanc']) &&  $_GET['statocanc'] === 'ok'):
?>
  <div class="stato stato--ok">Contatto eliminato con successo. >
elseif (isset($_GET['statocanc']) &&  $_GET['statocanc'] === 'ko'):
?>
  <div class="stato stato--ko">Ops! C'è stato un problema, riprova più tardi. >
endif;
if (count($contatti) > 0):
?>

<bordo tabella="1">
  <thead>
    ([]); 
  </thead>
  <tbody>
    (); 
  </tbody>
</tavolo>
  
  <p>Nessun contatto da mostrare, <a href="/rubrica/inserisci-contatto.php">vuoi aggiungerne uno? >
 ; 
  </principale>
</corpo>
</HTML>
