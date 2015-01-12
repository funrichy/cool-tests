<?php
// scr/Cooltests/BlogBundle/Controller/PageController.php


namespace Cooltests\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{

	// Home page
	public function indexAction()
	{
		return $this->render('CooltestsBlogBundle:Page:index.html.twig');
	}

	// About page
	public function aboutAction()
	{
		return $this->render('CooltestsBlogBundle:Page:about.html.twig');
	}

	// Contact page
	public function contactAction()
	{
		return $this->render('CooltestsBlogBundle:Page:contact.html.twig');
	}
}