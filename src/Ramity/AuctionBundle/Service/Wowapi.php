<?php
namespace Ramity\AuctionBundle\Service;

use Ramity\AuctionBundle\Entity\Auction;

Class Wowapi
{
    private $doctrine;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getAuctions()
    {
        //buckle in boys and girls
        ini_set('max_execution_time', 0);
        //it's about to last forever

        $em = $this->doctrine->getEntityManager();

        $ch = curl_init();
        $url = 'https://us.api.battle.net/wow/auction/data/malganis?locale=en_US&apikey=v9fs6fdmur34edt8tggz3abzfkdmu8bu';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, -1);
        $data = curl_exec($ch);

        if(curl_errno($ch))
        {
            echo 'Curl error: ' . curl_error($ch) . ' <br>';
            print_r(curl_getinfo($ch));
        }

        //

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

        foreach($auctions as $auction)
        {
            $repository = $em->getRepository('AuctionBundle:Auction');
            $entity = $repository->findOneBy(array('auc' => $auction->auc));

            if(!$entity)
            {
                $entity = new Auction();
            }

            $entity->setAuc($auction->auc);
            $entity->setItem($auction->item);
            $entity->setOwner($auction->owner);
            $entity->setOwnerRealm($auction->ownerRealm);
            $entity->setBid($auction->bid);
            $entity->setBuyout($auction->buyout);
            $entity->setQuantity($auction->quantity);
            $entity->setTimeLeft($auction->timeLeft);
            $entity->setRand($auction->rand);
            $entity->setSeed($auction->seed);
            $entity->setContext($auction->context);

            if(property_exists($auction, 'modifiers'))
            {
                $modifiers = array();

                foreach ($auction->modifiers as $array)
                {
                    $modifiers[] = array(
                        'type' => $array->type,
                        'value' => $array->value
                    );
                }

                $entity->setModifiers($modifiers);
            }

            if(property_exists($auction, 'petSpeciesId'))
            {
                $entity->setPetSpeciesId($auction->petSpeciesId);
            }

            if(property_exists($auction, 'petBreedId'))
            {
                $entity->setPetBreedId($auction->petBreedId);
            }

            if(property_exists($auction, 'petLevel'))
            {
                $entity->setPetLevel($auction->petLevel);
            }

            if(property_exists($auction, 'petQualityId'))
            {
                $entity->setPetQualityId($auction->petQualityId);
            }

            if(property_exists($auction, 'bonusLists'))
            {
                $bonusLists = array();

                foreach ($auction->bonusLists as $array)
                {
                    $bonusLists[] = array(
                        'bonusListId' => $array->bonusListId
                    );
                }
            }

            $em->persist($entity);
            $em->flush();

        }

        ini_restore('max_execution_time');

        return $auctions;
    }
}
