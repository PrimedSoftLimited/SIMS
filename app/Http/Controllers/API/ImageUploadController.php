<?php

namespace App\Http\Controllers\API;

use App\User;
use Cloudder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ImageUploadController extends Controller
{
    public function uploadImage(Request $request)
    {
        $this->validate($request, [
            'avatar' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            ]);
        
            $user = Auth::user();

            // check if image already exist, and delete from cloudinary storage
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            if ($user->avatar != "https://res.cloudinary.com/iro/image/upload/v1563191501/hwlxwnp6q0eq7fwtzz5p.jpg") {
                $oldAvatar = pathinfo($user->avatar, PATHINFO_FILENAME);
                try {
                    $delete_old_avatar = Cloudder::destroyImage($oldAvatar);
                    } catch (Exception $e) {
                        $response['error'] = "Try Again";
                        return response()->json($response, 400);
                    }
            }

            // upload image
            $cloudder = Cloudder::upload($request->file('avatar')->getRealPath());

            // get upload result
            $uploadResult = $cloudder->getResult();

            // get image url for our database storage
            $avatar = $uploadResult["url"];

            // calls the function to save image url amongst users details
            $this->saveImages($request, $avatar);

            // return json response
            $response['message'] = "Image Uploaded Successfully!";
            $response['avatar'] = $avatar;

            return response()->json($response, 200);
        }
    }
    public function saveImages(Request $request, $avatar)
    {
        $user = Auth::user();

        // function to save users image. this function is triggered in the section above
        $user->avatar = $avatar;
        $user->save();
    }

}
