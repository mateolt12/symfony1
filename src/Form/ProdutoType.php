<?php
// src/Form/ProdutoType.php
namespace App\Form;
use App\Entity\Produto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProdutoType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
			->add('idProduto', TextType::class)
			->add('nome', TextType::class)
			->add('save', SubmitType::class, array('label' => 'crear'));
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults(array('data_class' => Produto::class));
	}

}

?>