<?php

namespace Victoire\Widget\VideoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\MediaBundle\Form\Type\MediaType;

class VideoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("media", MediaType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.video.label"
            ])
            ->add("autoplay", CheckboxType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.autoplay.label",
                "required" => false
            ])
            ->add("controls", CheckboxType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.controls.label",
                "required" => false
            ])
            ->add("playInLoop", CheckboxType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.loop.label",
                "required" => false
            ])
            ->add("responsive", CheckboxType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.responsive.label",
                "required" => false
            ])
            ->add("width", TextType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.width.label",
                "required" => false
            ])
            ->add("height", TextType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.height.label",
                "required" => false
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\VideoBundle\Entity\Video',
            'translation_domain' => 'victoire',
        ]);
    }
}