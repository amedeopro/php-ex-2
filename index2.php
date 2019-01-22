<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite.
Avremo poi sempre per ogni array i punti fatti dalla squadra di casa e i
punti fatti dalla squadra in trasferta. Stampiamo a schermo tutte le
partite con questo schema, tenendo conto che il punteggio potrebbe non
essere disponibile
Olimpia Milano - Cantù | 55-60 -->
<?php

$partite = [
  [
    'squadra_casa' => 'Olimpia Milano',
    'squadra_ospite' => 'Cantu',
    'punti_casa' => 55,
    'punti_ospite' => 60
  ],
  [
    'squadra_casa' => 'Team2',
    'squadra_ospite' => 'Team3',
    'punti_casa' => 84,
    'punti_ospite' => 65
  ],
  [
    'squadra_casa' => 'Team4',
    'squadra_ospite' => 'Team5',
    'punti_casa' => 101,
    'punti_ospite' => 103
  ]
];

  foreach ($partite as $k => $partita) {
    var_dump($partita);
    die();
  }


 ?>
