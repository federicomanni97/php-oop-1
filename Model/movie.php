<?php
class Movie
{
    private int $id;
    private string $original_title;
    private string $overview;
    private float $vote_average;
    private string $poster_path; 
    private string $original_language;

    function __construct($id, $title, $overview, $vote, $language, $postermovie)
    {
        $this->id = $id;
        $this->original_title = $title;
        $this->overview = $overview;
        $this->vote_average = $vote;
        $this->original_language = $language;
        $this->poster_path = $postermovie;
    }
    public function movieCards()
    {
        $poster_path = $this-> poster_path;
        $title = $this->original_title;
        $overview = $this -> overview;
        $vote = $this -> vote_average;
        include __DIR__ . '/../Views/card.php';
    }
}


$movieString = file_get_contents(__DIR__ . '/movie_db.json');
$movieList = json_decode($movieString, True);
$movies = [];
foreach ($movieList as $item) {
    $movies[] = new Movie($item ['id'], $item['original_title'], $item['overview'], $item['vote_average'], $item['original_language'], $item['poster_path']);
}
?>