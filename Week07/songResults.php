<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!--
	Name: Elisabeth Feeley
	Date: 20/2/2013
	Description: Exercise 9.12
	Assistance: N/A
-->	 

<head>
   <title>Favorite Song Results</title>
   <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
</head>

<body>

<?php 
		extract($_POST); 
		
		$songName = ($_POST['songName']);
		$composer = ($_POST['composer']);
		$performingArtist = ($_POST['performingArtist']);

		$insert_query = "insert into songs values ('', '" .$songName. "', '" .$composer. "', '" .$performingArtist."');";
		$select_query = "select songName, composer, performingArtist FROM songs;";
		
		// Connect to MySQL
         if ( !( $database = mysql_connect( "dev.cictspace.net", 
            "EFEELE7822", "Fubar#1995" ) ) )
            die( "Could not connect to database" );
   
         // open SCORDLE_SCRATCHPAD database
         if ( !mysql_select_db( "EFEELE7822_CSC322", $database ) )
            die( "Could not open EFEELE7822_CSC322 database" );
   
         // query TICKET table
         if ( !( $result1 = mysql_query( $insert_query, $database ) ) )
            die( "Could not insert execute query! <br /></p></div></body></html>" );
			
		if ( !( $result2 = mysql_query( $select_query, $database ) ) )
            die( "Could not select execute query! <br /></p></div></body></html>" );
		?>
	
	
	<h3> The following data was posted to the EFEELE7822.songs database: </h3>

	<table>
		<tr>
		<td> Song Name: </td>
		<td><?php echo ("$songName"); ?></td> <!-- with parentheses -->
		</tr>
		<tr>
			<td> Composer: </td>
			<td><?php echo "$composer"; ?></td> <!-- w/out parentheses -->
		</tr>
		<tr>
			<td> Performing Artist: </td>
			<td><?php echo "$performingArtist"; ?></td>
		</tr>
	</table>

	
	<h3>Favorite Songs</h3>

	<table border = "1" cellpadding = "3" cellspacing = "2" >

	<tr>
		<td>Song Name</td>
		<td>Composer</td>
		<td>Performing Artist</td>
	</tr>
	
	 <?php

		// fetch each record in result set
		for ( $counter = 0; $row = mysql_fetch_row( $result2 ); $counter++ )
		{

		   // build table to display results
		   print( "<tr>" );

		   foreach ( $row as $key => $value ) 
			  print( "<td>$value</td>" );

		   print( "</tr>" );
		}

		mysql_close( $database );
	 ?>

	</table>
	
	<p>
	
	<br />You yielded <strong>
	<?php print( "$counter" ) ?> results.<br /><br /></strong>
	
	</p>
	
<p>
      <a href="http://validator.w3.org/check?uri=referer">
		<img src="http://www.w3.org/Icons/valid-xhtml10" 
		   alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>

    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
</body>

</html>