<?

Class Model_Db extends Model {

    public function get_subscribers()
    {
	$query = 'SELECT * FROM `telephone_book` WHERE 1';
	$result = mysqli_query($this->link, $query);
	while ($response[] = mysqli_fetch_array($result, MYSQLI_ASSOC));
	return $response;
    }
    
    public function get_subscriber($id)
    {
	$query = "SELECT * FROM `telephone_book` WHERE `id` = '$id'";
	$result = mysqli_query($this->link, $query);
	$response = mysqli_fetch_array($result, MYSQLI_ASSOC);
	return $response;
    }

    public function add_subscriber($data)
    {
	foreach ($data as $key => $value)
	{
	    $$key = $value;
	}
	$query = 'INSERT INTO `telephone_book`(`name`, `surname`, `telephone`, `address`) VALUES (';
	$query .= "'$name','$surname','$telephone','$address')";
	$result = mysqli_query($this->link, $query);
    }

    public function delete_subscriber($id)
    {
	$query = "DELETE FROM `telephone_book` WHERE `id` = '$id'";
//	echo $query;
	$result = mysqli_query($this->link, $query);
	echo mysqli_error($this->link);
	
    }

}

?>
