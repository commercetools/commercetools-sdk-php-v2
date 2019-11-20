<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ParcelMeasurements;
use Commercetools\Api\Models\Order\ParcelMeasurementsBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ParcelMeasurementsUpdatedMessagePayload>
 */
final class ParcelMeasurementsUpdatedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $deliveryId;

    /**
     * @var ParcelMeasurements|?ParcelMeasurementsBuilder
     */
    private $measurements;

    /**
     * @var ?string
     */
    private $parcelId;

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @return null|ParcelMeasurements
     */
    public function getMeasurements()
    {
        return $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements;
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
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMeasurements(?ParcelMeasurements $measurements)
    {
        $this->measurements = $measurements;

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
    public function withMeasurementsBuilder(?ParcelMeasurementsBuilder $measurements)
    {
        $this->measurements = $measurements;

        return $this;
    }

    public function build(): ParcelMeasurementsUpdatedMessagePayload
    {
        return new ParcelMeasurementsUpdatedMessagePayloadModel(
            $this->deliveryId,
            ($this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements),
            $this->parcelId
        );
    }

    public static function of(): ParcelMeasurementsUpdatedMessagePayloadBuilder
    {
        return new self();
    }
}
