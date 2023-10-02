<?php

namespace App\Models;

use CodeIgniter\Model;

class Product_model extends Model {

    protected $table = "product";
    protected $primaryKey = "product_id";
    protected $allowedFields = [
        "title", 
        "price",      
        "image_url",
        "description",
        "is_deleted",
        "created_date",
        "modified_date"
    ];

}

?>