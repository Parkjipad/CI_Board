<body>
<?
	foreach($list as $result)
	{
		$title = $result['title'];
		$id = $result['id'];
		$text = $result['content'];
	}
?>
<div class="row">
<table class="table col-md-9">
	<tr><td>제 목  : </td><td><?=$title?></td></tr>
	<tr><td>아이디 : </td><td><?=$id?></td></tr>
	<tr><td>내 용  : </td><td><?=$text?></td></tr>
</table>
</div>
</div>