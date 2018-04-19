<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderSetParcelMeasurementsActionModel extends OrderUpdateActionModel implements OrderSetParcelMeasurementsAction
{
    const DISCRIMINATOR_VALUE = 'setParcelMeasurements';

    /**
     * @var string
     */
    protected $parcelId;
    /**
     * @var ParcelMeasurements
     */
    protected $measurements;

    /**
     * @return string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            $value = $this->raw(OrderSetParcelMeasurementsAction::FIELD_PARCEL_ID);
            $value = (string)$value;
            $this->parcelId = $value;
        }
        return $this->parcelId;
    }
    /**
     * @return ParcelMeasurements
     */
    public function getMeasurements()
    {
        if (is_null($this->measurements)) {
            $value = $this->raw(OrderSetParcelMeasurementsAction::FIELD_MEASUREMENTS);
            if (is_null($value)) {
                return $this->mapData(ParcelMeasurements::class, null);
            }
            $value = $this->mapData(ParcelMeasurements::class, $value);

            $this->measurements = $value;
        }
        return $this->measurements;
    }

    /**
     * @param string $parcelId
     * @return $this
     */
    public function setParcelId(string $parcelId)
    {
        $this->parcelId = (string)$parcelId;

        return $this;
    }
    /**
     * @param ParcelMeasurements $measurements
     * @return $this
     */
    public function setMeasurements(ParcelMeasurements $measurements)
    {
        $this->measurements = $measurements;

        return $this;
    }

}
