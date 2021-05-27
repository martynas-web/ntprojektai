<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function newsPosts()
    {
        $new_query = get_posts([
            'post_type' => 'post',
        ]);
        return array_map(function ($post) {
            return [
                'title'       => get_the_title($post),
                'url'         => get_permalink($post),
                'date'        => get_the_date('Y-m-d', $post),
                'categories'  => get_the_category($post),
                'image'       => get_the_post_thumbnail_url($post)
            ];
        }, $new_query);
    }

    public function contactsPosts()
    {
        $new_query = get_posts([
            'post_type' => 'contacts',
            'posts_per_page' => '3',
        ]);
        return array_map(function ($post) {
            return [
                'title'       => get_the_title($post),
                'contact'     => get_fields($post),
                'image'       => get_the_post_thumbnail_url($post)
            ];
        }, $new_query);
    }

    public function galleryPosts()
    {

        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
         $search = $_GET['photo'];
         $url = "https://api.unsplash.com/search/photos?query=$search&client_id=HMVk8fSzMx37bj9TyBMEd2wsnrksgzHdn8gPw-sdhwk&per_page=6";
         $json = file_get_contents($url, false, stream_context_create($arrContextOptions));
         $json = json_decode($json, true);
         $gallery = $json["results"];
         return $gallery;
    }
}
