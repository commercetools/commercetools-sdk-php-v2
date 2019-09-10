<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Api\Models\Order\TrackingDataBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetParcelTrackingDataAction>
 */
final class StagedOrderSetParcelTrackingDataActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var TrackingData|?TrackingDataBuilder
     */
    private $trackingData;

    /**
     * @var ?string
     */
    private $parcelId;

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
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        return $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData;
    }

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
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
    public function withTrackingData(?TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;

        return $this;
    }

    /**
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTrackingDataBuilder(?TrackingDataBuilder $trackingData)
    {
        $this->trackingData = $trackingData;

        return $this;
    }

    public function build(): StagedOrderSetParcelTrackingDataAction
    {
        return new StagedOrderSetParcelTrackingDataActionModel(
            $this->action,
            ($this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData),
            $this->parcelId
        );
    }

    public static function of(): StagedOrderSetParcelTrackingDataActionBuilder
    {
        return new self();
    }
}
