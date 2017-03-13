<?php

namespace Victoire\Widget\VideoBundle\Resolver;

use Symfony\Component\PropertyAccess\PropertyAccess;
use Victoire\Bundle\MediaBundle\Helper\RemoteVideo\RemoteVideoHandler;
use Victoire\Bundle\MediaBundle\Helper\RemoteVideo\RemoteVideoHelper;
use Victoire\Bundle\WidgetBundle\Model\Widget;
use Victoire\Bundle\WidgetBundle\Resolver\BaseWidgetContentResolver;

class WidgetVideoContentResolver extends BaseWidgetContentResolver
{
    /**
     * @var RemoteVideoHandler
     */
    private $remoteVideoHandler;

    /**
     * WidgetVideoContentResolver constructor.
     * @param RemoteVideoHandler $remoteVideoHandler
     */
    public function __construct(
        RemoteVideoHandler $remoteVideoHandler
    )
    {
        $this->remoteVideoHandler = $remoteVideoHandler;
    }

    /**
     * @param Widget $widget
     * @return array
     */
    public function getWidgetStaticContent(Widget $widget)
    {
        $reflect = new \ReflectionClass($widget);
        $widgetProperties = $reflect->getProperties();
        $parameters = ['widget' => $widget];
        $accessor = PropertyAccess::createPropertyAccessor();

        foreach ($widgetProperties as $property) {
            if (!$property->isStatic()) {
                $value = $accessor->getValue($widget, $property->getName());
                $parameters[$property->getName()] = $value;
            }
        }

        return $parameters;
    }
}