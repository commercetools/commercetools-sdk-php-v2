<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Api\Models\Order\TrackingDataBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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

     * @var ?string
     */
    private $parcelKey;

    /**

     * @var null|TrackingData|TrackingDataBuilder
     */
    private $trackingData;

    /**
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> is required for this update action.</p>
     *

     * @return null|string
     */
    public function getParcelKey()
    {
        return $this->parcelKey;
    }

    /**

     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        return $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData;
    }

    /**
     * @param ?string $parcelId
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

        return $this;
    }

    /**
     * @param ?string $parcelKey
     * @return $this
     */
    public function withParcelKey(?string $parcelKey)
    {
        $this->parcelKey = $parcelKey;

        return $this;
    }

    /**
     * @param ?TrackingData $trackingData
     * @return $this
     */
    public function withTrackingData(?TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;

        return $this;
    }

    /**
     * @deprecated use withTrackingData() instead
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
            $this->parcelKey,
            $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData
        );
    }

    public static function of(): StagedOrderSetParcelTrackingDataActionBuilder
    {
        return new self();
    }
}
