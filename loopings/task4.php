<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }
    td {
      text-align: center;
    }
  </style>
  <table>
    <tr>
      <th>Buah</th>
    </tr>
    <tr>
      <?php
      $buah = [
          'Alpukat',
          'Delima',
          'Mangga',
          'Durian',
          'Rambutan',
          'Semangka',
          'Melon',
          'Salak',
      ];
      foreach ($buah as $fruit) {
          echo "
          <tr>
            <td>$fruit</td>
          </tr>
          ";
      }
      ?>
    </tr>
  </table>
</body>

</html>