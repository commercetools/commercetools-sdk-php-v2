<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObjectModel;

class ParcelMeasurementsModel extends JsonObjectModel implements ParcelMeasurements {
    /**
     * @var int
     */
    protected $heightInMillimeter;
    /**
     * @var int
     */
    protected $lengthInMillimeter;
    /**
     * @var int
     */
    protected $widthInMillimeter;
    /**
     * @var int
     */
    protected $weightInGram;

    /**
     * @return int
     */
    public function getHeightInMillimeter()
    {
        if (is_null($this->heightInMillimeter)) {
            $value = $this->raw(ParcelMeasurements::FIELD_HEIGHT_IN_MILLIMETER);
            $value = (int)$value;
            $this->heightInMillimeter = $value;
        }
        return $this->heightInMillimeter;
    }
    /**
     * @return int
     */
    public function getLengthInMillimeter()
    {
        if (is_null($this->lengthInMillimeter)) {
            $value = $this->raw(ParcelMeasurements::FIELD_LENGTH_IN_MILLIMETER);
            $value = (int)$value;
            $this->lengthInMillimeter = $value;
        }
        return $this->lengthInMillimeter;
    }
    /**
     * @return int
     */
    public function getWidthInMillimeter()
    {
        if (is_null($this->widthInMillimeter)) {
            $value = $this->raw(ParcelMeasurements::FIELD_WIDTH_IN_MILLIMETER);
            $value = (int)$value;
            $this->widthInMillimeter = $value;
        }
        return $this->widthInMillimeter;
    }
    /**
     * @return int
     */
    public function getWeightInGram()
    {
        if (is_null($this->weightInGram)) {
            $value = $this->raw(ParcelMeasurements::FIELD_WEIGHT_IN_GRAM);
            $value = (int)$value;
            $this->weightInGram = $value;
        }
        return $this->weightInGram;
    }

    /**
     * @param int $heightInMillimeter
     * @return $this
     */
    public function setHeightInMillimeter(int $heightInMillimeter)
    {
        $this->heightInMillimeter = (int)$heightInMillimeter;

        return $this;
    }
    /**
     * @param int $lengthInMillimeter
     * @return $this
     */
    public function setLengthInMillimeter(int $lengthInMillimeter)
    {
        $this->lengthInMillimeter = (int)$lengthInMillimeter;

        return $this;
    }
    /**
     * @param int $widthInMillimeter
     * @return $this
     */
    public function setWidthInMillimeter(int $widthInMillimeter)
    {
        $this->widthInMillimeter = (int)$widthInMillimeter;

        return $this;
    }
    /**
     * @param int $weightInGram
     * @return $this
     */
    public function setWeightInGram(int $weightInGram)
    {
        $this->weightInGram = (int)$weightInGram;

        return $this;
    }

}
