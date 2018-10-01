<?php
    /*
      List of Rooms, Suspects, and Weapons

      Rooms: 
      'Study',
      'Hall', 
      'Lounge',
      'Library',
      'Dining Room',
      'Billiard Room',
      'Conservatory',      
      'Ballroom',
      'Kitchen'

      Suspects: 
      'Colonel Mustard',
      'Miss Scarlet',
      'Mr. Green',
      'Mrs. Peacock',
      'Mrs. White',
      'Professor Plum'

      Weapons:
      'Candlestick',
      'Knife',
      'Lead Pipe',
      'Revolver',
      'Rope',
      'Wrench'
  */

  $rooms = [ 
    'Study' => [
      'items' => ['the Candlestick']
    ],
    'Hall' => [
      'items' => ['Mr. Green']
    ], 
    'Lounge' => [
      'items' => ['Mrs. White', 'the Knife']
    ],
    'Library' => [
      'items' => []
    ],
    'Dining Room' => [
      'items' => ['Mrs. Peacock', 'the Lead Pipe']
    ],
    'Billiard Room' => [
      'items' => ['Miss Scarlet']
    ],
    'Conservatory' => [
      'items' => ['professor Plum']
    ],      
    'Ballroom' => [
      'items' => ['the Rope']
    ],
    'Kitchen' => [
      'items' => ['the Wrench']
    ]
  ];

  // Check if room is provided
  // Check if room exists
  if (isset($_GET['room'])&& isset($rooms[$_GET['room']])) {
    $items = $rooms[$_GET['room']]['items'];

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clue</title>
  <link rel="stylesheet" href="clue.css">
</head>
<body>
  
  <header>
    <h1>Clue</h1>
  </header>
  <div class="items">
    <?php if (isset($items)) : ?>
      <?php if (count($items)) : ?>
        <p> You have found <?php echo implode(' and ', $items); ?>.</p>
      <?php else : ?>
        <p> You found no items. <p>
      <?php endif; ?>
    <?php else : ?>
        <p>Select a room to get a clue.</p>
    <?php endif; ?>
  </div>
  <main class="container">
    <?php foreach ($rooms as $room => $items) : ?>
      <div class="room">
        <a href="?room=<?php echo $room; ?>"><?php echo $room; ?></a>
      </div>
<?php endforeach; ?>
  </main>
</body>
</html>