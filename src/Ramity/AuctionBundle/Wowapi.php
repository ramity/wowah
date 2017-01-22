<?php
namespace Ramity\AuctionBundle\Services

class Wowapi
{
    private $apiKey;

    private $regions = array(
        "US" => "https://us.api.battle.net/wow",
        "EU" => "https://eu.api.battle.net/wow",
        "KR" => "https://kr.api.battle.net/wow",
        "TW" => "https://tw.api.battle.net/wow"
    );

    private $characterFields = array(
        "achievements",
        "appearance",
        "feed",
        "guild",
        "hunterPets",
        "items",
        "mounts",
        "pets",
        "petSlots",
        "progression",
        "pvp",
        "quests",
        "reputation",
        "statistics",
        "stats",
        "talents",
        "titles",
        "audit"
    );

    private $guildFields = array(
        "achievements",
        "members",
        "news",
        "challenge"
    );

    private $pvpBrackets = array(
        "2v2",
        "3v3",
        "5v5",
        "rbg"
    );

    function __construct($apiKey = "null")
    {
        $this->apiKey = $apiKey;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }
}
