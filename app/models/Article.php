<?php

 class Article{
  public $id;
  public $title;
  public $content;

  function __construct( $id, $title, $content ) {
    $this->title = $title;
    $this->content = $content;
 }

 
 }

 ?>