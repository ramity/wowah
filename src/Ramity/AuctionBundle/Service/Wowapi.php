<?php
namespace Ramity\AuctionBundle\Service;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

Class Wowapi extends Controller
{
    private $apiKey;
    private $apiSecret;

    function __constructor($api = null, $apiSecret = null)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
    }

    public function getAuctions()
    {
        $ch = curl_init();

        $url = 'https://us.api.battle.net/wow/auction/data/malganis?locale=en_US&apikey=v9fs6fdmur34edt8tggz3abzfkdmu8bu';

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, -1);
        $data = curl_exec($ch);
        curl_close($ch);

        $json = json_decode($data);

        $url = $json->files[0]->url;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, -1);
        $data = curl_exec($ch);
        curl_close($ch);

        $json = json_decode($data);

        $auctions = $json->auctions;

        foreach($auctions as $key => $auction)
        {
            $auction->id = $key;
        }

        echo '<pre>';
        print_r($auctions);
        die();

        return $auctions;
    }
}
