<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<ChannelSetGeoLocationAction>
 */
final class ChannelSetGeoLocationActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?JsonObject
     */
    private $geoLocation;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|JsonObject
     */
    public function getGeoLocation()
    {
        return $this->geoLocation;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withGeoLocation(?JsonObject $geoLocation)
    {
        $this->geoLocation = $geoLocation;

        return $this;
    }

    public function build(): ChannelSetGeoLocationAction
    {
        return new ChannelSetGeoLocationActionModel(
            $this->action,
            $this->geoLocation
        );
    }

    public static function of(): ChannelSetGeoLocationActionBuilder
    {
        return new self();
    }
}
