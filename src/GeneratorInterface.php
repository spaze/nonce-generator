<?php
namespace Spaze\NonceGenerator;

/**
 * Nonce generator interface.
 *
 * @author Michal Špaček
 */
interface GeneratorInterface
{
	public function getNonce();
}
