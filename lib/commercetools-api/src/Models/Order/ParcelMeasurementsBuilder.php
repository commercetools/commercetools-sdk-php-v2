<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ParcelMeasurements>
 */
final class ParcelMeasurementsBuilder implements Builder
{
    /**
     * @var ?float
     */
    private $heightInMillimeter;

    /**
     * @var ?float
     */
    private $lengthInMillimeter;

    /**
     * @var ?float
     */
    private $widthInMillimeter;

    /**
     * @var ?float
     */
    private $weightInGram;

    /**
     * @return null|float
     */
    public function getHeightInMillimeter()
    {
        return $this->heightInMillimeter;
    }

    /**
     * @return null|float
     */
    public function getLengthInMillimeter()
    {
        return $this->lengthInMillimeter;
    }

    /**
     * @return null|float
     */
    public function getWidthInMillimeter()
    {
        return $this->widthInMillimeter;
    }

    /**
     * @return null|float
     */
    public function getWeightInGram()
    {
        return $this->weightInGram;
    }

    /**
     * @param ?float $heightInMillimeter
     * @return $this
     */
    public function withHeightInMillimeter(?float $heightInMillimeter)
    {
        $this->heightInMillimeter = $heightInMillimeter;

        return $this;
    }

    /**
     * @param ?float $lengthInMillimeter
     * @return $this
     */
    public function withLengthInMillimeter(?float $lengthInMillimeter)
    {
        $this->lengthInMillimeter = $lengthInMillimeter;

        return $this;
    }

    /**
     * @param ?float $widthInMillimeter
     * @return $this
     */
    public function withWidthInMillimeter(?float $widthInMillimeter)
    {
        $this->widthInMillimeter = $widthInMillimeter;

        return $this;
    }

    /**
     * @param ?float $weightInGram
     * @return $this
     */
    public function withWeightInGram(?float $weightInGram)
    {
        $this->weightInGram = $weightInGram;

        return $this;
    }


    public function build(): ParcelMeasurements
    {
        return new ParcelMeasurementsModel(
            $this->heightInMillimeter,
            $this->lengthInMillimeter,
            $this->widthInMillimeter,
            $this->weightInGram
        );
    }

    public static function of(): ParcelMeasurementsBuilder
    {
        return new self();
    }
}
