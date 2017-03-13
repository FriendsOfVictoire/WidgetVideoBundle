<?php

namespace Victoire\Widget\VideoBundle\Entity;

use Victoire\Bundle\WidgetBundle\Entity\Widget;
use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\CoreBundle\Annotations as VIC;

/**
 * Class VideoWidget
 * @package Victoire\Widget\VideoBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table("vic_widget_video")
 */
class WidgetVideo extends Widget
{
    use \Victoire\Widget\VideoBundle\Entity\Traits\VideoTraits;
}