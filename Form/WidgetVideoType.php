<?php

namespace Victoire\Widget\VideoBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\MediaBundle\Form\Type\MediaType;

/**
 * Class WidgetVideoType
 * @package Victoire\Widget\VideoBundle\Form
 */
class WidgetVideoType extends WidgetType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('videoHosted', CheckboxType::class, [
                'label' => "victoire.victoire_video_widget_bundle.form.video_hosted.label",
                'required' => true
            ])
            ->add("video", MediaType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.video.label"
            ])
            ->add("alt", TextType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.alt.label"
            ])
            ->add("legend", TextType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.legend.label"
            ])
            ->add("title", TextType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.title.label"
            ])
            ->add("autoplay", CheckboxType::class, [
                "label" => "victoire.victoire_video_widget_bundle.form.autoplay.label"
            ])
        ;

        parent::buildForm($builder, $options);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\VideoBundle\Entity\WidgetVideo',
            'widget'             => 'Video',
            'translation_domain' => 'victoire',
        ]);
    }
}