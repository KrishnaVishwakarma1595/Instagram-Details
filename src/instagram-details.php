<?php
	
	require 'simple_html_dom.php';
	
	/**
	 * 
	 */
	class Instagram{
		
		function __construct()
		{
			$this->username = '';
			$this->instagrmaUrl = 'https://www.instagram.com/';
			$this->userData = '';
			$this->csrf_token = '';
		}

		function initializeUser($username){
			
			$fetchUrl = $this->instagrmaUrl.$username;

			$str = file_get_contents($fetchUrl);

			$html = str_get_html($str);			

			$data = $html->find('#react-root' , 0)->next_sibling();

			$data = trim($data, '<pre><script type="text/javascript">window._sharedData = ;');

			$userData = json_decode($data);

			$this->csrf_token = $userData->config->csrf_token;

			$this->userData = $userData->entry_data->ProfilePage[0]->graphql->user;

		}

		function getAccountId(){
			$user = $this->userData;

			return $user->id;
		}

		function getFullName(){
			$user = $this->userData;

			return $user->full_name;
		}

		function getUsername(){
			$user = $this->userData;

			return $user->username;
		}

		function getBiography(){
			$user = $this->userData;

			return $user->biography;
		}

		function getProfilePic(){
			$user = $this->userData;

			return $user->profile_pic_url;
		}

		function getProfilePicHd(){
			$user = $this->userData;

			return $user->profile_pic_url_hd;
		}

		function is_private(){
			$user = $this->userData;

			return $user->is_private;
		}

		function getFollowsCount(){
			$user = $this->userData;

			return $user->edge_follow->count;
		}

		function getFollowersCount(){
			$user = $this->userData;

			return $user->edge_followed_by->count;
		}

		function getCsrfToken(){
			return $this->csrf_token;
		}
	}

	new Instagram();
?>