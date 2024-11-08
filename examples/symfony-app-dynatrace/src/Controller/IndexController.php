<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

//added just because New Relic<->Symfony needed it
class IndexController extends AbstractController
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $this->logger->info('Homepage accessed');
        return new Response('Welcome to the PHP SDK Demo App');
    }
}
