<?php


  $partite = [
    '12/01/2019' => [
      'partita 1' => [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantu',
        'punti_squadra_casa' => '80',
        'punti_squadra_ospite' => '75'
      ],
      'partita 2' => [
        'squadra_casa' => 'Reyer Venezia',
        'squadra_ospite' => 'V.L. Pesaro',
        'punti_squadra_casa' => '73',
        'punti_squadra_ospite' => '58'
      ],
      'partita 3' => [
        'squadra_casa' => 'Virtus Bologna',
        'squadra_ospite' => 'Libertas Forlì',
        'punti_squadra_casa' => '94',
        'punti_squadra_ospite' => '60'
      ],
      'partita 4' => [
        'squadra_casa' => 'Varese',
        'squadra_ospite' => 'Auxilium Torino',
        'punti_squadra_casa' => '',
        'punti_squadra_ospite' => ''
      ]
    ],
    '24/02/2019' => [
      'partita 1' => [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantu',
        'punti_squadra_casa' => '67',
        'punti_squadra_ospite' => '98'
      ],
      'partita 2' => [
        'squadra_casa' => 'Reyer Venezia',
        'squadra_ospite' => 'V.L. Pesaro',
        'punti_squadra_casa' => '55',
        'punti_squadra_ospite' => '68'
      ],
      'partita 3' => [
        'squadra_casa' => 'Virtus Bologna',
        'squadra_ospite' => 'Libertas Forlì',
        'punti_squadra_casa' => '',
        'punti_squadra_ospite' => ''
      ],
      'partita 4' => [
        'squadra_casa' => 'Varese',
        'squadra_ospite' => 'Auxilium Torino',
        'punti_squadra_casa' => '',
        'punti_squadra_ospite' => ''
      ]
    ]

  ];

  foreach ($partite as $k => $data) { ?>
    <?php ?>
    <h1><?php echo $k; ?></h1>
    <?php
    foreach ($data as $key => $value) {
    if (!empty($value['punti_squadra_casa']) && !empty($value['punti_squadra_ospite'])) {
    ?>
    <h1>
      <?php echo $key ?>:
      <?php echo $value['squadra_casa'] ?> - <?php echo $value['squadra_ospite'] ?> |
       <?php echo $value['punti_squadra_casa'] ?> - <?php echo $value['punti_squadra_ospite'] ?>
    </h1>
  <?php } else { ?>
    <h1>
      <?php echo $key ?>:
      <?php echo $value['squadra_casa'] ?>   -
      <?php echo $value['squadra_ospite'] ?> | partita rinviata
    </h1>
  <?php } } } ?>

<?php
