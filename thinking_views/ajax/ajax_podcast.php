<?php 
	if (isset($_GET['hash_id'])) {
		/*echo $_GET['paybooking']; echo $_GET['event'];*/

		$res['response'] = [];
	    $stmt = $conn->prepare("SELECT * FROM podcast_booking WHERE invoice_code = :ev");
        $stmt->bindParam(":ev", $_GET['paybooking']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_BOTH);

        $event = getPodcastAmount($conn, "podcast", $_GET['hash_id']);

          array_push($res['response'], $row);
        array_push($res['response'], $event);
        echo json_encode($res);




}
?>