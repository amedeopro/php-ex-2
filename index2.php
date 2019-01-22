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
    'punti_ospite' => NULL
  ],
  [
    'squadra_casa' => 'Team4',
    'squadra_ospite' => 'Team5',
    'punti_casa' => 101,
    'punti_ospite' => 103
  ],
  [
    'squadra_casa' => 'Team6',
    'squadra_ospite' => 'Team7',
    'punti_casa' => 46,
    'punti_ospite' => NULL
  ]
];

 ?>

<ul>
  <?php   foreach ($partite as $partita) { ?>

    <li>Partita: <?php echo "$partita[squadra_casa]"; ?> Vs. <?php echo "$partita[squadra_ospite]"; ?> |
      <?php if ($partita[punti_casa] === NULL || $partita[punti_ospite] === NULL ) { ?>
        Partita ancora da disputare
      <?php  } else { ?>
        <?php echo "$partita[punti_casa]"; ?> - <?php echo "$partita[punti_ospite]"; ?>
      <?php } ?>
      </li>

  <?php   } ?>
</ul>
