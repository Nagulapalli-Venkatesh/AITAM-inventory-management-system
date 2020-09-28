<?PHP
  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = "Accepted_data_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  include 'connect.php';
  
  $result = "SELECT * FROM `order` WHERE `status` = 'accept' ORDER BY `sno` DESC";
  $sql = mysqli_query($conn, $result);
  while($row = mysqli_fetch_array($sql)) {
    if(!$flag) {
      // display field/column names as first row
      echo "sno"."\t"."faculty id"."\t"."item"."\t"."quantity"."\t"."expected price"."\t"."priority"."\t"."status"."\t"."date"."\t"."\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo $row['sno']."\t".$row['facid']."\t".$row['item']."\t".$row['qty']."\t".$row['expp']."\t".$row['priority']."\t".$row['status']."\t".$row['date']."\t"."\n";
  }
  exit;
?>