<?php

namespace Victoire\Widget\VideoBundle\Entity;

use Victoire\Bundle\WidgetBundle\Entity\Widget;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class VideoWidget
 * @package Victoire\Widget\VideoBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table("vic_widget_video")
 */
class VideoWidget extends Widget
{
    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="\Victoire\Bundle\MediaBundle\Entity\Media")
     * @ORM\JoinColumn(name="video_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    private $video;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param string $video
     * @return VideoWidget
     */
    public function setVideo($video)
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return VideoWidget
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}