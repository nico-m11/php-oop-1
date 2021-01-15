<?php
/*
definiste una classe PHP che modella il concetto di una "Stanza di Hotel";
oltre a definire almeno 3 proprieta' distinte, vorrei che implementaste un costruttore che assegna un valore
ad almeno una di queste proprieta', a vostro piacimento. Infine, implementate anche una funzione che, quando invocata sull'oggetto,
stampi il contenuto di tutte le sue proprieta' ( concatenate i valori per formare una stringa ).
Testate il tutto creando qualche istanza e invocando l'unica funzione che avete scritto.
*/
class StanzaHotel {
  public $numero;
  public $bagno;
  public $letto;


  function __construct($numero) {
    $this->numero = $numero;
  }
  function print() {
    echo ('<h2>' . 'la stanza: '. $this->numero . ', con bagno: ' . $this->bagno . ', infine con letto: ' . $this->letto . '</h2>' . '<br>');
  }
}
$bis41 = new StanzaHotel('41');
$bis41->bagno = 'Guasto';
$bis41->letto = 'Singolo';

$padiglione_celeste = new StanzaHotel('23');
$padiglione_celeste->bagno = 'In Comume';
$padiglione_celeste->letto = '8 cuccette a due livelli';

$padiglione_maradona = new StanzaHotel('10');
$padiglione_maradona->bagno = 'Privato';
$padiglione_maradona->letto = 'Matrimoniale';


//foreach ($bis41 as $key => $value) {
  //echo $key . ': ' . $value . ', ' . '<br>';
//}

$bis41->print();
$padiglione_celeste->print();
$padiglione_maradona->print();
?>
