<?php

namespace Hiraeth\Diactoros;

use Hiraeth;
use Laminas\Diactoros;

/**
 * {@inheritDoc}
 */
class ServerRequestDelegate implements Hiraeth\Delegate
{
	/**
	 * {@inheritDoc}
	 */
	static public function getClass(): string
	{
		return Diactoros\ServerRequest::class;
	}


	/**
	 * {@inheritDoc}
	 */
	public function __invoke(Hiraeth\Application $app): object
	{
		return Diactoros\ServerRequestFactory::fromGlobals();
	}
}
