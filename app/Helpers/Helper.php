<?php
namespace App\Helpers;

use App\Curso;
use App\Tag;

class Helper
{
	public static function recentPosts( $categoria_id = null ){

		if ($categoria_id != null) {
			$cursos = Curso::where('categoria_id', $categoria_id)->orderBy('created_at', 'DESC')
			// ->join('files', 'files.id', '=', 'cursos.foto')
			->with(['foto'])
			->get()
			->take(3);
		}else{
			$cursos = Curso::orderBy('created_at', 'DESC')
			// ->join('files', 'files.id', '=', 'cursos.foto')
			->with(['foto'])
			->get()
			->take(3);
		}

		return $cursos;

	}

	public static function getTags(){
		return Tag::all();
	}

	public static function getRecentPostInstagram()
	{
		// Supply a user id and an access token
          $userid = "3040871634";
          $accessToken = "3040871634.0b0a53a.271afbc2524c47b0b5b38e701bf0e98d";

          // Gets our data
          function fetchData($url){
               $ch = curl_init();
               curl_setopt($ch, CURLOPT_URL, $url);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
               curl_setopt($ch, CURLOPT_TIMEOUT, 20);
               $result = curl_exec($ch);
               curl_close($ch); 
               return $result;
          }

          // Pulls and parses data.
          $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
          $result = json_decode($result);

          return $result;
	}
}