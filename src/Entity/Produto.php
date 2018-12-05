<?php
// src/Entity/Produto.php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Produto {
/**
 * @Assert\NotBlank(
 * message ="Este campo no pode estar vacio"
 * )
 *
 */
	private $idProduto;
/**
 * @Assert\Length (
 * min=5, minMessage="Lonxitude mínima de {{min}} caracteres")
 *
 */
	private $nome;

	public function getIdProduto() {
		return $this->idProduto;
	}

	public function setIdProduto($idProduto) {
		$this->idProduto = $idProduto;
		return $this;
	}

	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}

	function __construct(array $datos) {
		foreach ($datos as $campo => $valor) {
			$this->$campo = $valor;
		}
	}
}

?>