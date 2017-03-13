<?php

namespace Victoire\Widget\VideoBundle\Entity\Traits;

/**
 * Class VideoTraits
 * @package Victoire\Widget\VideoBundle\Entity\Traits
 */
trait VideoTraits
{
    /**
     * @ORM\OneToOne(targetEntity="Victoire\Widget\VideoBundle\Entity\Video", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="video_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     **/
    protected $video;

    /**
     * Has video.
     *
     * @return bool
     */
    public function hasVideo()
    {
        return $this->video ? true : false;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     * @return VideoTraits
     */
    public function setVideo($video)
    {
        $this->video = $video;
        return $this;
    }
}