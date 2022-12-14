<?php
declare(strict_types=1); // enable strict typing
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// This script assume that user send their request as a JSON (AJAX)
// Result of the query will be returned also as a JSON
// The JSON form of the request should be
// {
//     "queryString": (sql query)
// }
// Note that this implementation is vulnerable againts SQL injection

// change this for you local testing env
$db_addr = "localhost";
$db_user = "root";
$db_password = "";
$db_db = "cnpm";

class QueryRequest
{
    public $queryString;
    public function __construct($queryString)
    {
        $this->queryString = $queryString;
    }
}

class QueryResult
{
    public $errno;
    public $error;
    public $queryString;
    public $result;

    public function __construct($errno, $error, $queryString, $result)
    {
        $this->errno = $errno;
        $this->error = $error;
        $this->queryString = $queryString;
        $this->result = $result;
    }
}

function getRequest()
{
    // read json
    $rq = file_get_contents('php://input');

    if (empty($rq))
    {
        // if empty, then return
        return null;
    }

    // assume that rq is a JSON
    $rq = json_decode($rq,
                      true, // return associative array
                      3,    // should not have much more than 1 query, so not too deep
                      JSON_INVALID_UTF8_SUBSTITUTE);

    if (is_null($rq))
    {
        // something went wrong parsing the JSON (invalid, too deep, ...)
        return null;
    }
    if (!is_array($rq))
    {
        // $rq can be true or false (which is valid JSON)
        // but we want array, so dismiss
        return null;
    }
    if (!array_key_exists("queryString", $rq))
    {
        // JSON can parse, but that does not mean that it have the queryString
        return null;
    }

    return new QueryRequest($rq["queryString"]);
}

function queryMySQL(QueryRequest $qr)
{
    global $db_db, $db_addr, $db_user, $db_password;

    $result = new QueryResult(null, null, $qr->queryString, null);
    // Create connection
    $conn = new mysqli($db_addr, $db_user, $db_password, $db_db);
    // Check connection
    if ($conn->connect_error) {
        $result->errno = $mysqli->connect_errno;
        $result->error = $mysqli->connect_error;
        $conn->close();
        return $result;
    }

    // OK, try to query the result
    $queryResult = $conn->query($qr->queryString);
    if ($conn->error)
    {
        $result->errno = $mysqli->errno;
        $result->error = $mysqli->error;
        $conn->close();
        return $result;
    }

    // OK, extract the result
    // for non-returning queries, $queryResult will be a bool
    // if such then skip extract the result
    if (!is_bool($queryResult))
    {
        if ($queryResult->num_rows > 0)
        {
            $result->result = array();
            // output data of each row, pushing into $result->result
            while($row = $queryResult->fetch_assoc())
            {
                array_push($result->result, $row);
            }
        }

    }
    // Close connection
    $conn->close();

    return $result;
}

// debug, print out input
/* echo file_get_contents('php://input'); */
/* echo "\n"; */

$request = getRequest();
$result = null;
if (is_null($request))
{
    // create a empty result
    $result = new QueryResult("-1", "invalid JSON request", "error parsing - no queryString", null);
}
else
{
    $result = queryMySQL($request);
}

// debug, print out result
/* echo var_dump($result); */
/* echo "\n"; */

// depth is not more than 3
$result = json_encode($result, JSON_PRETTY_PRINT, 3);
echo $result;
