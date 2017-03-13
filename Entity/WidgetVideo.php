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
    private $remoteVideoCode;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $remoteVideoHost;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255, nullable=true)
     * @VIC\ReceiverProperty("textable")
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="legend", type="string", length=255, nullable=true)
     * @VIC\ReceiverProperty("textable")
     */
    private $legend;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     * @VIC\ReceiverProperty("textable")
     */
    private $title;

    /**
     * @var boolean
     * @ORM\Column(name="video_hosted", type="boolean")
     */
    private $videoHosted = true;

    /**
     * @var boolean
     * @ORM\Column(name="auto_play", type="boolean")
     */
    private $autoPlay = false;

    /**
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param string $video
     * @return WidgetVideo
     */
    public function setVideo($video)
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteVideoCode()
    {
        return $this->remoteVideoCode;
    }

    /**
     * @param string $remoteVideoCode
     * @return WidgetVideo
     */
    public function setRemoteVideoCode($remoteVideoCode)
    {
        $this->remoteVideoCode = $remoteVideoCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteVideoHost()
    {
        return $this->remoteVideoHost;
    }

    /**
     * @param string $remoteVideoHost
     * @return WidgetVideo
     */
    public function setRemoteVideoHost($remoteVideoHost)
    {
        $this->remoteVideoHost = $remoteVideoHost;
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
     * @return WidgetVideo
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     * @return WidgetVideo
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @param string $legend
     * @return WidgetVideo
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return WidgetVideo
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVideoHosted()
    {
        return $this->videoHosted;
    }

    /**
     * @param bool $videoHosted
     * @return WidgetVideo
     */
    public function setVideoHosted($videoHosted)
    {
        $this->videoHosted = $videoHosted;
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
}