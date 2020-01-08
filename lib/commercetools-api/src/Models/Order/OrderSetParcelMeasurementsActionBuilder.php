<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderSetParcelMeasurementsAction>
 */
final class OrderSetParcelMeasurementsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $parcelId;

    /**
     * @var ParcelMeasurements|?ParcelMeasurementsBuilder
     */
    private $measurements;

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * @return null|ParcelMeasurements
     */
    public function getMeasurements()
    {
        return $this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements;
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
    public function withMeasurements(?ParcelMeasurements $measurements)
    {
        $this->measurements = $measurements;

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

    public function build(): OrderSetParcelMeasurementsAction
    {
        return new OrderSetParcelMeasurementsActionModel(
            $this->parcelId,
            ($this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements)
        );
    }

    public static function of(): OrderSetParcelMeasurementsActionBuilder
    {
        return new self();
    }
}
