<center><h2>This is telephone book <small>v0.1</small></h2></center>
<a style="margin-left: 15%;" href="/index/add">Add subscriber</a>
<table border="1" width="70%" style="margin: 0 auto;">
    <thead>
	<tr>
	    <th>Name</th>
	    <th>Surname</th>
	    <th>Telephone</th>
	    <th>Adress</th>
	    <th>Functions</th>
	</tr>
    </thead>
<? 
$i = 0;
while($content[$i] != null): ?>
    <tbody>
	<tr>
	    <td><?= $content[$i]['name'] ?></td>
	    <td><?= $content[$i]['surname'] ?></td>
	    <td><?= $content[$i]['telephone'] ?></td>
	    <td><?= $content[$i]['address'] ?></td>
	    <td>
		<a href="/index/delete?id=<?= $content[$i]['id'];?>">Delete subscriber</a>
	    </td>
	</tr>
    </tbody>
<? 
$i++;
endwhile; 
?>

</table>
