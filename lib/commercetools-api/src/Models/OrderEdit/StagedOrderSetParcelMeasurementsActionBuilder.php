<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\ParcelMeasurements;
use Commercetools\Api\Models\Order\ParcelMeasurementsBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetParcelMeasurementsAction>
 */
final class StagedOrderSetParcelMeasurementsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ParcelMeasurements|?ParcelMeasurementsBuilder
     */
    private $measurements;

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
    public function withAction(?string $action)
    {
        $this->action = $action;

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

    public function build(): StagedOrderSetParcelMeasurementsAction
    {
        return new StagedOrderSetParcelMeasurementsActionModel(
            $this->action,
            ($this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements),
            $this->parcelId
        );
    }

    public static function of(): StagedOrderSetParcelMeasurementsActionBuilder
    {
        return new self();
    }
}
