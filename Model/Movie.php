<?php
include __DIR__ . "/Genre.php";
class Movie
{
    private int $id;
    private string $title;
    private string $overview;
    private int $vote_average;
    private string $release_date;
    private string $poster_path;
    private string $original_language;
    private Genre $genre;
    //funzione costruttore


    public function __construct($id, $title, $overview, $vote_average, $release_date, $poster_path, $original_language, $genre)
    {
        $this->id = $id;
        $this->title = $title;
        $this->overview = $overview;
        $this->vote_average = $vote_average;
        $this->release_date = $release_date;
        $this->poster_path = $poster_path;
        $this->original_language = $original_language;
        $this->genre = $genre;
    }
    public function printCard()
    {
        $genre = $this->genre;
        $image = $this->poster_path;
        $title = $this->title;
        $content = $this->overview;
        $custom = $this->vote_average;
        include __DIR__ . "/Card.php";
    }
    public function printStars()
    {
        $vote = ceil($this->vote_average / 2);
        include __DIR__ . "/Vote.php";
    }

}




$movie_string = file_get_contents(__DIR__ . '/movie_db.json');
$movieList = json_decode($movie_string, true);
// $Babylon = new Movie($movieList[4]['id'], $movieList[4]['title'], $movieList[4]['overview'], $movieList[4]['vote_average'], $movieList[4]['release_date'], $movieList[4]['poster_path'], $movieList[4]['original_language']);
// var_dump($Babylon);
$movies = [];
foreach ($movieList as $movie) {
    $movies[] = new Movie($movie['id'], $movie['title'], $movie['overview'], $movie['vote_average'], $movie['release_date'], $movie['poster_path'], $movie['original_language'], new Genre('Action'));
}
//var_dump($movies);

//echo $movies[0]->printStars();



?>