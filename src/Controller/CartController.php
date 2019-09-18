<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\ProductRepository;


class CartController extends AbstractController
{

    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }



    /**
     * @Route("/cart", name="cart")
     */
    public function index()
    {

        $getCart = $this->session->get('cart', []);
        $this->session->get('cart', $getCart);

        return $this->render('cart/index.html.twig', [
            'cart' => $getCart
        ]);
    }
}
