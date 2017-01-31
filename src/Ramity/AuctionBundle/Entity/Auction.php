<?php

namespace Ramity\AuctionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auction
 *
 * @ORM\Table(name="auction")
 * @ORM\Entity(repositoryClass="Ramity\AuctionBundle\Repository\AuctionRepository")
 */
class Auction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="auc", type="integer", unique=true)
     */
    private $auc;

    /**
     * @var int
     *
     * @ORM\Column(name="item", type="integer")
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255)
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="ownerRealm", type="string", length=255)
     */
    private $ownerRealm;

    /**
     * @var int
     *
     * @ORM\Column(name="bid", type="bigint")
     */
    private $bid;

    /**
     * @var int
     *
     * @ORM\Column(name="buyout", type="bigint")
     */
    private $buyout;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="timeLeft", type="string", length=255)
     */
    private $timeLeft;

    /**
     * @var int
     *
     * @ORM\Column(name="rand", type="integer")
     */
    private $rand;

    /**
     * @var int
     *
     * @ORM\Column(name="seed", type="bigint")
     */
    private $seed;

    /**
     * @var int
     *
     * @ORM\Column(name="context", type="integer")
     */
    private $context;

    /**
     * @var array
     *
     * @ORM\Column(name="modifiers", type="array", nullable=true)
     */
    private $modifiers;

    /**
     * @var array
     *
     * @ORM\Column(name="bonusLists", type="array", nullable=true)
     */
    private $bonusLists;

    /**
     * @var int
     *
     * @ORM\Column(name="petSpeciesId", type="integer", nullable=true)
     */
    private $petSpeciesId;

    /**
     * @var int
     *
     * @ORM\Column(name="petBreedId", type="integer", nullable=true)
     */
    private $petBreedId;

    /**
     * @var int
     *
     * @ORM\Column(name="petLevel", type="integer", nullable=true)
     */
    private $petLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="petQualityId", type="integer", nullable=true)
     */
    private $petQualityId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set auc
     *
     * @param integer $auc
     *
     * @return Auction
     */
    public function setAuc($auc)
    {
        $this->auc = $auc;

        return $this;
    }

    /**
     * Get auc
     *
     * @return int
     */
    public function getAuc()
    {
        return $this->auc;
    }

    /**
     * Set item
     *
     * @param integer $item
     *
     * @return Auction
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return int
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return Auction
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set ownerRealm
     *
     * @param string $ownerRealm
     *
     * @return Auction
     */
    public function setOwnerRealm($ownerRealm)
    {
        $this->ownerRealm = $ownerRealm;

        return $this;
    }

    /**
     * Get ownerRealm
     *
     * @return string
     */
    public function getOwnerRealm()
    {
        return $this->ownerRealm;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return Auction
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return int
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set buyout
     *
     * @param integer $buyout
     *
     * @return Auction
     */
    public function setBuyout($buyout)
    {
        $this->buyout = $buyout;

        return $this;
    }

    /**
     * Get buyout
     *
     * @return int
     */
    public function getBuyout()
    {
        return $this->buyout;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Auction
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set timeLeft
     *
     * @param string $timeLeft
     *
     * @return Auction
     */
    public function setTimeLeft($timeLeft)
    {
        $this->timeLeft = $timeLeft;

        return $this;
    }

    /**
     * Get timeLeft
     *
     * @return string
     */
    public function getTimeLeft()
    {
        return $this->timeLeft;
    }

    /**
     * Set rand
     *
     * @param integer $rand
     *
     * @return Auction
     */
    public function setRand($rand)
    {
        $this->rand = $rand;

        return $this;
    }

    /**
     * Get rand
     *
     * @return int
     */
    public function getRand()
    {
        return $this->rand;
    }

    /**
     * Set seed
     *
     * @param integer $seed
     *
     * @return Auction
     */
    public function setSeed($seed)
    {
        $this->seed = $seed;

        return $this;
    }

    /**
     * Get seed
     *
     * @return int
     */
    public function getSeed()
    {
        return $this->seed;
    }

    /**
     * Set context
     *
     * @param integer $context
     *
     * @return Auction
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return int
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set modifiers
     *
     * @param array $modifiers
     *
     * @return Auction
     */
    public function setModifiers($modifiers)
    {
        $this->modifiers = $modifiers;

        return $this;
    }

    /**
     * Get modifiers
     *
     * @return array
     */
    public function getModifiers()
    {
        return $this->modifiers;
    }

    /**
     * Set bonusLists
     *
     * @param array $bonusLists
     *
     * @return Auction
     */
    public function setBonusLists($bonusLists)
    {
        $this->bonusLists = $bonusLists;

        return $this;
    }

    /**
     * Get bonusLists
     *
     * @return array
     */
    public function getBonusLists()
    {
        return $this->bonusLists;
    }

    /**
     * Set petSpeciesId
     *
     * @param integer $petSpeciesId
     *
     * @return Auction
     */
    public function setPetSpeciesId($petSpeciesId)
    {
        $this->petSpeciesId = $petSpeciesId;

        return $this;
    }

    /**
     * Get petSpeciesId
     *
     * @return int
     */
    public function getPetSpeciesId()
    {
        return $this->petSpeciesId;
    }

    /**
     * Set petBreedId
     *
     * @param integer $petBreedId
     *
     * @return Auction
     */
    public function setPetBreedId($petBreedId)
    {
        $this->petBreedId = $petBreedId;

        return $this;
    }

    /**
     * Get petBreedId
     *
     * @return int
     */
    public function getPetBreedId()
    {
        return $this->petBreedId;
    }

    /**
     * Set petLevel
     *
     * @param integer $petLevel
     *
     * @return Auction
     */
    public function setPetLevel($petLevel)
    {
        $this->petLevel = $petLevel;

        return $this;
    }

    /**
     * Get petLevel
     *
     * @return int
     */
    public function getPetLevel()
    {
        return $this->petLevel;
    }

    /**
     * Set petQualityId
     *
     * @param integer $petQualityId
     *
     * @return Auction
     */
    public function setPetQualityId($petQualityId)
    {
        $this->petQualityId = $petQualityId;

        return $this;
    }

    /**
     * Get petQualityId
     *
     * @return int
     */
    public function getPetQualityId()
    {
        return $this->petQualityId;
    }
}
