<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=320; user-scalable=no" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Auth Demo</title>
		<script src="phonegap.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery-1.8.3.js"></script>
    <script>
      $.post('http://ap-test.d.d.ansta.pl/loggedin.php',{}, function(resp) {
        $('body').html(resp);
      });
    </script>
</head>

<body>
</body>
</html>
