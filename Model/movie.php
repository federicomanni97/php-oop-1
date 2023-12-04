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
        $this->title = $title;
        $this->overview = $overview;
        $this->vote = $vote;
        $this->language = $language;
        $this->postermovie = $postermovie;
    }
}


$movieString = file_get_contents('/Model/movie_db.json');
$movieList = json_decode($movieString, True);
$movies = [];
foreach ($movieList as $item) {
    $movies[] = new Movie($item ['id'], $item ['title'], $item ['overview'], $item ['vote'], $item ['language'], $item ['postermovie']);
}
?>