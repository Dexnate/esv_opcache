<?php

namespace OpCacheBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use OpCacheBundle\Entity\OpCacheDataModel;

class DefaultController extends Controller
{
    /**
    * @Route("/", name="opcache_index")
     */
    public function indexAction(Request $request)
    {
        $dataModel = new OpCacheDataModel();
        $title = $dataModel->getPageTitle();
        // replace this example code with whatever you need
        return $this->render('OpCacheBundle:Default:index.html.twig',["dataModel" => $dataModel]);
    }

    /**
     * @Route("/reset", name="opcache_reset")
     */
    public function resetAction(Request $request)
    {


       $reset = opcache_reset();
        return $this->redirectToRoute("opcache_index");
    }


}