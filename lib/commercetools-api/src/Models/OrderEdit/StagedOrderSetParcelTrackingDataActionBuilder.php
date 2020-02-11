<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Api\Models\Order\TrackingDataBuilder;

/**
 * @implements Builder<StagedOrderSetParcelTrackingDataAction>
 */
final class StagedOrderSetParcelTrackingDataActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $parcelId;

    /**
     * @var null|TrackingData|TrackingDataBuilder
     */
    private $trackingData;

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        return $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData;
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
    public function withTrackingData(?TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;

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
            $this->parcelId,
            $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData
        );
    }

    public static function of(): StagedOrderSetParcelTrackingDataActionBuilder
    {
        return new self();
    }
}
