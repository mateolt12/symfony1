<?php
// src/Controller/ProdutosController.php
namespace App\Controller;
use App\Entity\Produto;
use App\Form\ProdutoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProdutosController extends Controller {

/**
 * @Route ("/produtos/new", name="newProduto")
 */
	public function new (Request $request) {

		$produto = new Produto([]);
		$form = $this->createForm(\App\Form\ProdutoType::class, $produto);

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
//$form->getData()
			//$form->get('')->isClicked()
			// ir al modelo
			return $this->render('produtos/exito.html.twig',
				array('produto' => $produto));
		}

		return $this->render('produtos/new.html.twig',
			array('form' => $form->createView())
		);

/*/*
$produto = new Produto();
$form = $this->createFormBuilder($produto)
->add('nome', TextType::class)
->add('descricion', TextType::class)
->add('save', SubmitType::class, array ('label' =>'Gardar'))
->getForm();
return $this->render()
 */
	}
}

?>