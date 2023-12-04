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

    public function printStars()
    {
        $vote = ceil($this->vote_average / 2);
        include __DIR__ . "/Vote.php";
        return $template;
    }
    public function printFlags()
    {
        $flag_file = $this->original_language . ".svg";
        $flags_list = scandir(__DIR__ . "/../img/flags");
        if (!array_search($flag_file, $flags_list)) {
            $flag_file = 'default-lang.png';
        }
        return $flag_file;
    }
    public function printCard()
    {
        $genre = $this->genre;
        $image = $this->poster_path;
        $title = $this->title;
        $flag_file = $this->printFlags();
        $content = substr($this->overview, 0, 100) . '...';
        $custom = $this->printStars();
        //$lang = $this->original_language;
        include __DIR__ . "/Card.php";
    }
}




$movie_string = file_get_contents(__DIR__ . '/movie_db.json');
$movieList = json_decode($movie_string, true);
$genre_string = file_get_contents(__DIR__ . '/genre_db.json');
$genre_list = json_decode($genre_string, true);
$genre_rand = ($genre_list[rand(0, count($genre_list))]);
$movies = [];
foreach ($movieList as $movie) {
    $movies[] = new Movie($movie['id'], $movie['title'], $movie['overview'], $movie['vote_average'], $movie['release_date'], $movie['poster_path'], $movie['original_language'], new Genre(($genre_list[rand(0, count($genre_list) - 1)])));
}
//var_dump($movies);

//echo $movies[0]->printStars();



?>