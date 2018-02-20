<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Snap Bacon</title>
<!--		<script type="text/javascript" src="bacon.js"></script>-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>
	<body>
		<script>
			$(document).ready(function()
			{
				$("#baconButton").click(function()
				{
					$.getJSON('https://baconipsum.com/api/?callback=?',
						{ 'type':'meat-and-filler', 'start-with-lorem':'1', 'paras':'5' },
						function(baconGoodness)
						{
							if (baconGoodness && baconGoodness.length > 0)
							{
								$("#baconIpsumOutput").html('');
								for (var i = 0; i < baconGoodness.length; i++)
									$("#baconIpsumOutput").append('<p>' + baconGoodness[i] + '</p>');
								$("#baconIpsumOutput").show();
							}
						});
				});
			});
		</script>
		<input id="baconButton" type="button" value="Give me bacon">
		<div id="baconIpsumOutput" style="width: 80vw; margin: auto;">
			<p></p>
		</div>
	</body>
</html>