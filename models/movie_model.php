<?php

$movieId = $_GET["movie"];
//Get movie Details
//$personId = $GET["person"]

$strSQL = "SELECT
m.movie_id,
p.person_id,
m.title,
p.first_name as first_name,
p.last_name as last_name,
m.year,
m.release_date,
r.ratings_nm as rating,
m.post_credit,
m.gross_box_office as gate,
l.language_nm as language,
m.rt_rating as rotten_rating

FROM
cis282movies.movies m,
cis282movies.persons p,
cis282movies.ratings r,
cis282movies.language l


WHERE
m.director_id = p.person_id
AND m.rating_id = r.ratings_id
AND m.language_id = l.language_id
AND m.movie_id = $movieId


ORDER BY m.movie_id

";

// Get Results
$result = mysqli_query($conn, $strSQL);

//Fetch Data
$movieBio = mysqli_fetch_all($result, MYSQLI_ASSOC);
























//Free Result
mysqli_free_result($result);


//Close Connection
mysqli_close($conn);

?>