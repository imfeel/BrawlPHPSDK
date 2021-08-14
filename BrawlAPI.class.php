<?php
/*
 * Brawl Api
 *
 * @author github.com/imfeel
 *
 */

class BrawlApi {
	private $token;
	public function __construct($token = null) {
		$this->token = $token;
	}
	public function EventsRotation() {
	    return $this->requests('events/rotation');
	}
	public function clubs($tag) { 
	    $tag = str_replace('#', '', $tag);
	    return $this->requests('clubs/%' . $tag);
	}
	public function clubsMembers($tag) {
	    $tag = str_replace('#', '', $tag);
	    return $this->requests('clubs/%' . $tag . '/members');
	}
	public function brawlers() { 
	    $tag = str_replace('#', '', $tag);
	    return $this->requests('brawlers');

	}
	public function brawlersId($Id) { 
	    $tag = str_replace('#', '', $tag);
	    return $this->requests('brawlers/' . $Id);
	}
    public function players($tag) { 
        $tag = str_replace('#', '', $tag);
        return $this->requests('players/%' . $tag);
    }
    public function BattleLog($tag) {
        $tag = str_replace('#', '', $tag);
        return $this->requests('players/%' . $tag . 'battlelog');
    }

	
	public function getAuthToken() {
		return $this->token;
	}	
	
	private function requests($url) {
        $ch = curl_init();
        # getAuthToken()
        curl_setopt($ch, CURLOPT_URL, 'https://api.brawlstars.com/v1/'.$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        
        
        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Authorization: Bearer ' .  $this->token;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            return 'Requests error:' . curl_error($ch);
        }
        
        return $result;


	}
}
