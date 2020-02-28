<?php
require_once 'application/libraries/paginate.php';

$conn = new mysqli('localhost', 'root', '', 'world');

if ($conn->connect_errno) {
	echo "Failed to connect to MySQL: " . $conn->connect_error;
}

$limit = (isset($_GET['limit'])) ? $_GET['limit'] : 25;
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$links = (isset($_GET['links'])) ? $_GET['links'] : 10;

// var_dump($limit, $page, $links);
// $query = "SELECT city.Name, city.ID, city.CountryCode, country.Code, country.Name AS country, country.Continent, country.Region FROM city, country WHERE city.countryCode = country.Code";
$query = "SELECT * FROM `city` WHERE `CountryCode` IN ('AFG', 'ARG')";

$Paginator = new Paginator($conn, $query, "3");

$results = $Paginator->getData($page);
?>
<!DOCTYPE html>

<head>
    <title>PHP Pagination</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <h1>PHP Pagination</h1>
            <table class="table table-striped table-condensed table-bordered table-rounded">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>City</th>
                        <th width="20%">Country</th>
                        <th width="20%">Continent</th>
                        <th width="25%">Region</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($results->data); $i++): ?>
                    <tr>
                        <td>
                            <?php echo $results->data[$i]['ID']; ?>
                        </td>
                        <td>
                            <?php echo $results->data[$i]['Name']; ?>
                        </td>
                        <td>
                            <?php echo $results->data[$i]['country']; ?>
                        </td>
                        <td>
                            <?php echo $results->data[$i]['Continent']; ?>
                        </td>
                        <td>
                            <?php echo $results->data[$i]['Region']; ?>
                        </td>
                    </tr>
                    <?php endfor;?>
                </tbody>
            </table>
            <?php echo $Paginator->createLinks($links, 'pagination pagination-sm'); ?>
        </div>
        <input type="button" value="button" id="test_ajax" onclick="testAjax();">
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"> </script>
    <script>
    function testAjax() {
        // console.log("hi");
        $.ajax({
            url: 'http://localhost:6677/codeigniter/test-paginate.php',
            type: 'GET',
            dataType: 'json',
            data: { limit: 10, page: 3 },
            success: function(res) {
                console.log(res);
            }
        });
    }

    </script>
</body>

</html>
