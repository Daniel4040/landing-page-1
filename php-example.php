<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $say = htmlspecialchars($_POST['say']);

  $file_open = fopen("stored-data.csv", "a");
  $no_rows = count(file("stored-data.csv"));
  $form_data = array(
    'sr_no' => $no_rows,
    'email' => $say
  );

  fputcsv($file_open, $form_data);
?>