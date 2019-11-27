<?php

namespace Hiraeth\Diactoros;

use Hiraeth;
use Zend\Diactoros;

/**
 * {@inheritDoc}
 */
class ResponseDelegate implements Hiraeth\Delegate
{
	/**
	 * {@inheritDoc}
	 */
	static public function getClass(): string
	{
		return Diactoros\Response::class;
	}


	/**
	 * {@inheritDoc}
	 */
	public function __invoke(Hiraeth\Application $app): object
	{
		return (new Diactoros\Response())->withStatus(404);
	}
}
