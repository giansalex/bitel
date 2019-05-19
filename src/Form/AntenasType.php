<?php

namespace App\Form;

use App\Entity\Antenas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AntenasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sos')
            ->add('direccion')
            ->add('propietario')
            ->add('telefonoAtc')
            ->add('observacion')
            ->add('distrito')
            ->add('provincia')
            ->add('latitud')
            ->add('longitud')
            ->add('alturaCasa')
            ->add('alturaColumna')
            ->add('shelter')
            ->add('shelter2')
            ->add('estado')
            ->add('tipo')
            ->add('suministro')
            ->add('dwdmAgg')
            ->add('srtNoYes')
            ->add('viba')
            ->add('opticalFiber')
            ->add('typeOfDcSystem')
            ->add('quantityOfBatteries')
            ->add('airCondition')
            ->add('dryContact')
            ->add('jailProtection')
            ->add('padlock')
            ->add('llave')
            ->add('happyCall')
            ->add('onAir')
            ->add('fecha')
            ->add('maintenance')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Antenas::class,
        ]);
    }
}
