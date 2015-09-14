<?php

namespace BNETDocs\Models\News;

use \BNETDocs\Libraries\Model;

class View extends Model {

  public $news_post_id;
  public $news_post;

  public function __construct() {
    parent::__construct();
    $this->news_post_id = null;
    $this->news_post    = null;
  }

}
