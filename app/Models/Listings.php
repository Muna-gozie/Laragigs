<?php

namespace App\Models;

class Listings{
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto deleniti est quae sed veniam vitae!
                Accusantium ad asperiores beatae, dicta ex id nisi repellat, saepe sint sunt vitae voluptate.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto deleniti est quae sed veniam vitae!
                Accusantium ad asperiores beatae, dicta ex id nisi repellat, saepe sint sunt vitae voluptate.'
            ],
            [
                'id' => 3,
                'title' => 'Listing Three',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto deleniti est quae sed veniam vitae!
                Accusantium ad asperiores beatae, dicta ex id nisi repellat, saepe sint sunt vitae voluptate.'
            ],
        ];
    }

    public static function find_one($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }

    }
}
