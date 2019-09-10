<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ParcelMeasurements>
 */
final class ParcelMeasurementsBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $weightInGram;

    /**
     * @var ?int
     */
    private $lengthInMillimeter;

    /**
     * @var ?int
     */
    private $heightInMillimeter;

    /**
     * @var ?int
     */
    private $widthInMillimeter;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getWeightInGram()
    {
        return $this->weightInGram;
    }

    /**
     * @return null|int
     */
    public function getLengthInMillimeter()
    {
        return $this->lengthInMillimeter;
    }

    /**
     * @return null|int
     */
    public function getHeightInMillimeter()
    {
        return $this->heightInMillimeter;
    }

    /**
     * @return null|int
     */
    public function getWidthInMillimeter()
    {
        return $this->widthInMillimeter;
    }

    /**
     * @return $this
     */
    public function withWeightInGram(?int $weightInGram)
    {
        $this->weightInGram = $weightInGram;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLengthInMillimeter(?int $lengthInMillimeter)
    {
        $this->lengthInMillimeter = $lengthInMillimeter;

        return $this;
    }

    /**
     * @return $this
     */
    public function withHeightInMillimeter(?int $heightInMillimeter)
    {
        $this->heightInMillimeter = $heightInMillimeter;

        return $this;
    }

    /**
     * @return $this
     */
    public function withWidthInMillimeter(?int $widthInMillimeter)
    {
        $this->widthInMillimeter = $widthInMillimeter;

        return $this;
    }

    public function build(): ParcelMeasurements
    {
        return new ParcelMeasurementsModel(
            $this->weightInGram,
            $this->lengthInMillimeter,
            $this->heightInMillimeter,
            $this->widthInMillimeter
        );
    }

    public static function of(): ParcelMeasurementsBuilder
    {
        return new self();
    }
}
