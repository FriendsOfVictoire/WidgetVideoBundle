<?php

namespace Victoire\Widget\VideoBundle\Entity;

use Victoire\Bundle\MediaBundle\Entity\Media;
use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\CoreBundle\Annotations as VIC;

/**
 * Class Video
 * @package Victoire\Widget\VideoBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="vic_media_video")
 */
class Video
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="\Victoire\Bundle\MediaBundle\Entity\Media")
     * @ORM\JoinColumn(name="media_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    protected $media;

    /**
     * @var boolean
     * @ORM\Column(name="auto_play", type="boolean", nullable=true)
     */
    protected $autoPlay = false;

    /**
     * @var bool
     * @ORM\Column(name="play_in_loop", type="boolean", nullable=true)
     */
    protected $playInLoop = false;

    /**
     * @var bool
     * @ORM\Column(name="responsive", type="boolean", nullable=true)
     */
    protected $responsive = false;

    /**
     * @ORM\Column(name="width", type="string", nullable=true)
     */
    protected $width;

    /**
     * @ORM\Column(name="height", type="string", nullable=true)
     */
    protected $height;

    /**
     * @var bool
     * @ORM\Column(name="controls", type="boolean", nullable=true)
     */
    protected $controls = false;

    /**
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param string $media
     * @return WidgetVideo
     */
    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoPlay()
    {
        return $this->autoPlay;
    }

    /**
     * @param bool $autoPlay
     * @return WidgetVideo
     */
    public function setAutoPlay($autoPlay)
    {
        $this->autoPlay = $autoPlay;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPlayInLoop()
    {
        return $this->playInLoop;
    }

    /**
     * @param bool $playInLoop
     * @return WidgetVideo
     */
    public function setPlayInLoop($playInLoop)
    {
        $this->playInLoop = $playInLoop;
        return $this;
    }

    /**
     * @return bool
     */
    public function isResponsive()
    {
        return $this->responsive;
    }

    /**
     * @param bool $responsive
     * @return WidgetVideo
     */
    public function setResponsive($responsive)
    {
        $this->responsive = $responsive;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     * @return WidgetVideo
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return WidgetVideo
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return bool
     */
    public function isControls()
    {
        return $this->controls;
    }

    /**
     * @param bool $controls
     * @return WidgetVideo
     */
    public function setControls($controls)
    {
        $this->controls = $controls;
        return $this;
    }
}