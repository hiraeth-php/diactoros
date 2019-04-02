<?php

namespace Hiraeth\Diactoros;

use Hiraeth;
use Zend\Diactoros;

/**
 *
 */
class ResponseDelegate implements Hiraeth\Delegate
{
	/**
	 * Get the class for which the delegate operates.
	 *
	 * @static
	 * @access public
	 * @return string The class for which the delegate operates
	 */
	static public function getClass(): string
	{
		return Diactoros\Respone::class;
	}


	/**
	 * Get the instance of the class for which the delegate operates.
	 *
	 * @access public
	 * @param Hiraeth\Broker $broker The dependency injector instance
	 * @return object The instance of the class for which the delegate operates
	 */
	public function __invoke(Hiraeth\Broker $broker): object
	{
		$response = new Diactoros\Response();

		return $response->withStatus(404);
	}
}
