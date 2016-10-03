<?php
namespace Spaze\NonceGenerator;

/**
 * Nonce Generator service.
 *
 * @author Michal Špaček
 */
class Generator implements GeneratorInterface
{

	/** @var string */
	protected $nonce;


	/**
	 * Get nonce.
	 *
	 * @return string
	 */
	public function getNonce()
	{
		if ($this->nonce === null) {
			$this->nonce = base64_encode(random_bytes(16));
		}
		return $this->nonce;
	}

}
