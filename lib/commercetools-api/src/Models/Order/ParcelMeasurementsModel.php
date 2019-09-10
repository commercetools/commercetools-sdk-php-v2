<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObjectModel;

final class ParcelMeasurementsModel extends JsonObjectModel implements ParcelMeasurements
{
    /**
     * @var ?int
     */
    protected $weightInGram;

    /**
     * @var ?int
     */
    protected $lengthInMillimeter;

    /**
     * @var ?int
     */
    protected $heightInMillimeter;

    /**
     * @var ?int
     */
    protected $widthInMillimeter;

    public function __construct(
        int $weightInGram = null,
        int $lengthInMillimeter = null,
        int $heightInMillimeter = null,
        int $widthInMillimeter = null
    ) {
        $this->weightInGram = $weightInGram;
        $this->lengthInMillimeter = $lengthInMillimeter;
        $this->heightInMillimeter = $heightInMillimeter;
        $this->widthInMillimeter = $widthInMillimeter;
    }

    /**
     * @return null|int
     */
    public function getWeightInGram()
    {
        if (is_null($this->weightInGram)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ParcelMeasurements::FIELD_WEIGHT_IN_GRAM);
            if (is_null($data)) {
                return null;
            }
            $this->weightInGram = (int) $data;
        }

        return $this->weightInGram;
    }

    /**
     * @return null|int
     */
    public function getLengthInMillimeter()
    {
        if (is_null($this->lengthInMillimeter)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ParcelMeasurements::FIELD_LENGTH_IN_MILLIMETER);
            if (is_null($data)) {
                return null;
            }
            $this->lengthInMillimeter = (int) $data;
        }

        return $this->lengthInMillimeter;
    }

    /**
     * @return null|int
     */
    public function getHeightInMillimeter()
    {
        if (is_null($this->heightInMillimeter)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ParcelMeasurements::FIELD_HEIGHT_IN_MILLIMETER);
            if (is_null($data)) {
                return null;
            }
            $this->heightInMillimeter = (int) $data;
        }

        return $this->heightInMillimeter;
    }

    /**
     * @return null|int
     */
    public function getWidthInMillimeter()
    {
        if (is_null($this->widthInMillimeter)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ParcelMeasurements::FIELD_WIDTH_IN_MILLIMETER);
            if (is_null($data)) {
                return null;
            }
            $this->widthInMillimeter = (int) $data;
        }

        return $this->widthInMillimeter;
    }

    public function setWeightInGram(?int $weightInGram): void
    {
        $this->weightInGram = $weightInGram;
    }

    public function setLengthInMillimeter(?int $lengthInMillimeter): void
    {
        $this->lengthInMillimeter = $lengthInMillimeter;
    }

    public function setHeightInMillimeter(?int $heightInMillimeter): void
    {
        $this->heightInMillimeter = $heightInMillimeter;
    }

    public function setWidthInMillimeter(?int $widthInMillimeter): void
    {
        $this->widthInMillimeter = $widthInMillimeter;
    }
}
