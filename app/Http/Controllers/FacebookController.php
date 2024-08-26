<?php

namespace App\Http\Controllers;

use Facebook\Facebook;
use Illuminate\Http\Request;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
class FacebookController extends Controller
{
    public function getPosts()
    {
        $fb = new Facebook([
            'app_id' => config('facebook.app_id'),
            'app_secret' => config('facebook.app_secret'),
            'default_graph_version' => config('facebook.default_graph_version'),
        ]);

        try {
            // Replace {user-id} with your actual user ID or page ID
            $response = $fb->get('/tingle2021/posts?access_token=' .config('facebook.access_token'));
            $posts = $response->getGraphEdge();
        } catch (FacebookResponseException $e) {
            // Handle Facebook API error
            return response()->json(['error' => $e->getMessage()]);
        } catch (FacebookSDKException $e) {
            // Handle SDK error
            return response()->json(['error' => $e->getMessage()]);
        }

        return view('your_view_name', compact('posts'));
    }
}
