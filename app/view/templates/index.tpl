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
{foreach from=$content item=foo}
    <tbody>
	<tr>
	    <td>{$foo.name}</td>
	    <td>{$foo.surname}</td>
	    <td>{$foo.telephone}</td>
	    <td>{$foo.address}</td>
	    <td>{$smarty.foreach.bar.total}
		<a href="/index/delete?id={$foo.id}">Delete subscriber</a>
	    </td>
	</tr>
    </tbody>
{/foreach}
</table>
