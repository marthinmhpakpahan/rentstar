<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CommonFunctions
{
    public static function uploadFiles($files, $type, $additional="") {
        $multiple_files = true;
        if(!is_array($files)) {
            $files = [$files];
            $multiple_files = false;
        }
        $file_paths = [];
        foreach($files as $file){
            $FOLDER_DESTINATION = [
                'PHOTO' => "assets/img/users/photos/",
                'DRIVER_PHOTO' => "assets/img/users/drivers/photos/",
                'CAR_IMAGE' => "assets/img/users/drivers/cars/" . $additional . "/",
                'DRIVER_LICENSE' => "assets/img/users/drivers/license_cards/",
                'ID_CARD' => "assets/img/users/id_cards/",
                "LOGO" => "assets/img/users/logos/"
            ];
    
            $file_extension = $file->getClientOriginalExtension();
            $folder_destination = $FOLDER_DESTINATION[$type];
            $destination_filename = str()->random(10) . "" . time() . "." . $file_extension;
            $file->move($folder_destination, $destination_filename);
            $file_paths[] = $folder_destination . $destination_filename;
        }

        if($multiple_files == true) {
            return $file_paths;
        }
        return $file_paths[0];
    }
}
