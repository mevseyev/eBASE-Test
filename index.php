<!doctype html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<head>
    <meta charset="utf-8" />
    <title></title>
<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<style>
    .flleft {float: left; border: 1px solid #000; padding: 5px; width: 200px;}
    .flleftnoborder {float: left; border: none; padding: 5px; width: 200px;}
</style>
</head>
<body>
<p>&nbsp;</p>
<div class="flleft">id</div>
<div class="flleft">First Name</div>
<div class="flleft">Last Name</div>
<div class="flleft">Email</div>
<br style="clear: left;">
<?php
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
   );
$i=0;
 while (list($var, $array) = each($people)) {
    $i++;
    $k=0;
    $alrt="";
    foreach ($array as $key => $keyval) {
            $k++;
            if (strncmp(strval($key),"id",2) != 0)
                $alrt=$alrt." "."$keyval";
            print "<div class='flleft'>$keyval</div>";
    }
print "<div id='".$i.$k."'>$alrt</div>";
print "<div class='flleftnoborder'><button id='"."$i"."'>Alert</button></div><br style='clear: left;'>"
."<script type='text/javascript'>

		$(function() {
			$('#"."$i"."$k"."').dialog({
				autoOpen: false,
                title: 'Alert Box',
                buttons: {
					'Close': function() {
						$(this).dialog('close');
					}},
			});

			$('#"."$i"."').on('click', function() {
				$('#"."$i"."$k"."').dialog('open');
			});
		});
</script>";

};

?>

</body>
</html>