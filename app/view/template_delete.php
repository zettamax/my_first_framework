<center><h2>This is telephone book <small>v0.1</small></h2></center>
<a href="/">Back to telephone book</a>
<h3>Deleting subcriber</h3>
<h2 style="color:red;">Do you want to delete this subscriber?</h2>
<table border="0">
    <thead>
	<tr>
	    <th>Name</th>
	    <th>Surname</th>
	    <th>Telephone</th>
	    <th>Address</th>
	    <th></th>
	</tr>
    </thead>
    <tbody>
	<tr>
	    <td><?= $content['name'];?></td>
	    <td><?= $content['surname'];?></td>
	    <td><?= $content['telephone'];?></td>
	    <td><?= $content['address'];?></td>
	    <td>
		<form action="/index/delete" method="post">
		    <input type="hidden" name="id" value="<?= $content['id'];?>" />
		    <input type="submit" name="submit" value="Delete" />
		</form>
	    </td>
	</tr>
    </tbody>
</table>

