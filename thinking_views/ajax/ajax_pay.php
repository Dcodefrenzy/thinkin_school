<?php 
	if (isset($_GET['event'])) {
		/*echo $_GET['paybooking']; echo $_GET['event'];*/
	
		$res['response'] = [];
	    $stmt = $conn->prepare("SELECT * FROM booking WHERE invoice_code = :ev");
        $stmt->bindParam(":ev", $_GET['paybooking']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_BOTH);

        if ($row[1]=="event") {
        $event = getEvenForPayment($conn, "events", $_GET['event']);
          array_push($res['response'], $row);
        array_push($res['response'], $event);
        echo json_encode($res);
        }elseif ($row[1]=="training") {
          $event = getEvenForPayment($conn, $row[1], $_GET['event']);
                  array_push($res['response'], $row);
        array_push($res['response'], $event);
        echo json_encode($res);
        }



}
?>