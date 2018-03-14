<?php

class Article
{
    protected $article;
    public $id;
    public $title;
    public $text;

    public function __construct($article)
    {
        $this->article = $article;
        $arr = explode('|', $this->article);
        $this->id = $arr[0];
        $this->title = $arr[1];
        $this->text = $arr[2];

    }

    public function getArticle()
    {
        return $this->article;
    }

}