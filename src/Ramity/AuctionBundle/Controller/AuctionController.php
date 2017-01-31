<?php

namespace Ramity\AuctionBundle\Controller;

use Ramity\AuctionBundle\Entity\Auction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Auction controller.
 *
 * @Route("auction")
 */
class AuctionController extends Controller
{
    /**
     * Lists all auction entities.
     *
     * @Route("/", name="auction_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $apiKey = $this->container->getParameter('apiKey');

        $wow = $this->get('auction.wowapi');
        //$wow->setApiKey($apiKey);
        //$auctions = $wow->getAuctions("malganis");

        $auctions = $wow->getAuctions();

        //$em = $this->getDoctrine()->getManager();
        //$auctions = $em->getRepository('AuctionBundle:Auction')->findAll();

        return $this->render('auction/index.html.twig', array(
            'auctions' => $auctions,
        ));
    }

    /**
     * Finds and displays a auction entity.
     *
     * @Route("/{id}", name="auction_show")
     * @Method("GET")
     */
    public function showAction(Auction $auction)
    {

        return $this->render('auction/show.html.twig', array(
            'auction' => $auction,
        ));
    }
}
