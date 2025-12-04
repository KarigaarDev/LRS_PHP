<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function index()
    {
        $data['title'] = "Video Gallery";

        // Only YouTube video IDs
        $data['videos'] = [
            "Gs7H13Nu6gQ",
            "hmNcmB-cnhA",
            "1sTW59ifJaE"
        ];

        return view("video-gallery/gallery", $data);
    }
}
