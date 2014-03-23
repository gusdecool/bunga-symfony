<?php

namespace Bunga\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SampleController extends Controller
{

	/**
	 * @return array
	 *
	 * @Route("/")
	 * @Template()
	 */
	public function indexAction()
	{
		$gmtDateTime = new \DateTime('now');
		$baliTimeZone = new \DateTimeZone('Etc/GMT-8');
		$baliDateTime = new \DateTime('now', $baliTimeZone);

		var_dump($gmtDateTime, $baliDateTime);

		return array(
			'title' => 'Sample Controller - List'
		);
	}
}
