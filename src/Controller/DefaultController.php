<?php
declare(strict_types=1);
/**
 * File added by Alfredo stuzzo Aiello
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route(name="site_homepage")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homepageAction()
    {
        return $this->render('default/index.html.twig');
    }
}