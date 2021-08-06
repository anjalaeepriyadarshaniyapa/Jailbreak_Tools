<?php 
	
// function setConnection()
//     {

//         //create connection
//         $connection = mysqli_connect('localhost','root','','jailbreak');
//         //checking the connection
//         if(mysqli_connect_error()){
//             die('Databese connection failed'. mysqli_connect_error());
//         }

//         return $connection;
//     }


// function runQuary($myCommand="",$msg="")
// {
// 	$ConnectionN = setConnection();

// 	try
// 	{
// 		if (mysqli_query($ConnectionN, $myCommand)) 
// 		{
// 			echo "<script type='text/javascript'>alert('{$msg}')</script>";
// 		}
// 		else {
// 			echo "Error ". mysqli_error($ConnectionN);

// 		}
// 	}
// 	catch (exception $ex)
// 	{
// 		echo 'Caught exception: ', $ex -> getMessage(), "\n";
// 	}
// 	finally
// 	{
// 		mysqli_close($ConnectionN);
// 	}

// }

// function runNewQuary($myCommand="")
// {
// 	$ConnectionN = setConnection();

// 	try
// 	{
// 		mysqli_query($ConnectionN, $myCommand);
// 	}
// 	catch (exception $ex)
// 	{
// 		echo 'Caught exception: ', $ex -> getMessage(), "\n";
// 	}
// 	finally
// 	{
// 		mysqli_close($ConnectionN);
// 	}

// }

// function runCartQuary($myCommand="")
// {
// 	$ConnectionN = setConnection();

// 	try
// 	{
// 		mysqli_query($ConnectionN, $myCommand);
// 		echo "<script type='text/javascript'>alert('Adding to Cart Success !! Please view cart for place order.')</script>";
// 	}
// 	catch (exception $ex)
// 	{
// 		echo 'Caught exception: ', $ex -> getMessage(), "\n";
// 	}
// 	finally
// 	{
// 		mysqli_close($ConnectionN);
// 	}

// }

// function runOrderQuary($myCommand="")
// {
// 	$ConnectionN = setConnection();

// 	try
// 	{
// 		mysqli_query($ConnectionN, $myCommand);
// 		echo "<script type='text/javascript'>alert('Order Placed Successfully !! Please view orders for cancelling...')</script>";
// 	}
// 	catch (exception $ex)
// 	{
// 		echo 'Caught exception: ', $ex -> getMessage(), "\n";
// 	}
// 	finally
// 	{
// 		mysqli_close($ConnectionN);
// 	}

// }


// function runSearchQuary($myCommand="")
// {
// 	$ConnectionR = setConnection();

// 	try
// 	{

// 		if (mysqli_query($ConnectionR, $myCommand)) {
// 			$record = mysqli_fetch_assoc(mysqli_query($ConnectionR, $myCommand));
			
// 		}
// 		else {
// 			echo "Error ". mysqli_error($ConnectionR);

// 		}
// 	}
// 	catch (exception $ex)
// 	{
// 		echo 'Caught exception: ', $ex -> getMessage(), "\n";
// 	}
// 	finally
// 	{
// 		mysqli_close($ConnectionR);
// 	}

// 	return print_r($record);
// }

?>

<?php
	  //create connection
		$con = mysqli_connect('localhost','root','','jailbreak');
		//checking the connection
		if(mysqli_connect_error()){
		die('Databese connection failed'. mysqli_connect_error());
		}
?>