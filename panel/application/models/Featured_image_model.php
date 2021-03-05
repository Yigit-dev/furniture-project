<?php

class Featured_image_model extends VS_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->tableName= "featured_images";
    }
}
