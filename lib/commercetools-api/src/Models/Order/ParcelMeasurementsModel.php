<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ParcelMeasurementsModel extends JsonObjectModel implements ParcelMeasurements
{
    /**
     * @var ?float
     */
    protected $heightInMillimeter;

    /**
     * @var ?float
     */
    protected $lengthInMillimeter;

    /**
     * @var ?float
     */
    protected $widthInMillimeter;

    /**
     * @var ?float
     */
    protected $weightInGram;


    public function __construct(
        float $heightInMillimeter = null,
        float $lengthInMillimeter = null,
        float $widthInMillimeter = null,
        float $weightInGram = null
    ) {
        $this->heightInMillimeter = $heightInMillimeter;
        $this->lengthInMillimeter = $lengthInMillimeter;
        $this->widthInMillimeter = $widthInMillimeter;
        $this->weightInGram = $weightInGram;
    }

    /**
     * @return null|float
     */
    public function getHeightInMillimeter()
    {
        if (is_null($this->heightInMillimeter)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_HEIGHT_IN_MILLIMETER);
            if (is_null($data)) {
                return null;
            }
            $this->heightInMillimeter = (float) $data;
        }

        return $this->heightInMillimeter;
    }

    /**
     * @return null|float
     */
    public function getLengthInMillimeter()
    {
        if (is_null($this->lengthInMillimeter)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_LENGTH_IN_MILLIMETER);
            if (is_null($data)) {
                return null;
            }
            $this->lengthInMillimeter = (float) $data;
        }

        return $this->lengthInMillimeter;
    }

    /**
     * @return null|float
     */
    public function getWidthInMillimeter()
    {
        if (is_null($this->widthInMillimeter)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_WIDTH_IN_MILLIMETER);
            if (is_null($data)) {
                return null;
            }
            $this->widthInMillimeter = (float) $data;
        }

        return $this->widthInMillimeter;
    }

    /**
     * @return null|float
     */
    public function getWeightInGram()
    {
        if (is_null($this->weightInGram)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_WEIGHT_IN_GRAM);
            if (is_null($data)) {
                return null;
            }
            $this->weightInGram = (float) $data;
        }

        return $this->weightInGram;
    }


    public function setHeightInMillimeter(?float $heightInMillimeter): void
    {
        $this->heightInMillimeter = $heightInMillimeter;
    }

    public function setLengthInMillimeter(?float $lengthInMillimeter): void
    {
        $this->lengthInMillimeter = $lengthInMillimeter;
    }

    public function setWidthInMillimeter(?float $widthInMillimeter): void
    {
        $this->widthInMillimeter = $widthInMillimeter;
    }

    public function setWeightInGram(?float $weightInGram): void
    {
        $this->weightInGram = $weightInGram;
    }
}
