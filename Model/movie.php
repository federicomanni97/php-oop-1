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
    }
}
?>