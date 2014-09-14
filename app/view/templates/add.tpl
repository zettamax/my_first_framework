<center><h2>This is telephone book <small>v0.1</small></h2></center>
<a href="/">Back to telephone book</a>
<h3>Adding subcriber</h3>
<form action="/index/add" method="post">
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
		<td><input type="text" name="name"/></td>
		<td><input type="text" name="surname"/></td>
		<td><input type="text" name="telephone"/></td>
		<td><input type="text" name="address"/></td>
		<td><input type="submit" name="submit" value="Add" /></td>
	    </tr>
	</tbody>
    </table>
</form>