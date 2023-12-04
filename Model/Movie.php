<?php
class Movie
{
    private int $id;
    private string $title;
    private string $overview;
    private int $vote_average;
    private string $release_date;
    private string $poster_path;
    private string $original_language;
    //funzione costruttore


    public function __construct($id, $title, $overview, $vote_average, $release_date, $poster_path, $original_language)
    {
        $this->id = $id;
        $this->title = $title;
        $this->overview = $overview;
        $this->vote_average = $vote_average;
        $this->release_date = $release_date;
        $this->poster_path = $poster_path;
        $this->original_language = $original_language;
    }
}

$Babylon = new Movie(9381, "Babylon A.D.", "A veteran-turned-mercenary is hired to take a young woman with a secret from post-apocalyptic Eastern Europe to New York City.", 5.601, "2008-08-20", "https://image.tmdb.org/t/p/w342/kt9nqD0uOar8IVE9191HXhWOXKI.jpg", "en");
var_dump($Babylon);

?>