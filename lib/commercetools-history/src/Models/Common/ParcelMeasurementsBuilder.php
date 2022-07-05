<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

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

     * @var ?int
     */
    private $heightInMillimeter;

    /**

     * @var ?int
     */
    private $lengthInMillimeter;

    /**

     * @var ?int
     */
    private $widthInMillimeter;

    /**

     * @var ?int
     */
    private $weightInGram;

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
    public function getLengthInMillimeter()
    {
        return $this->lengthInMillimeter;
    }

    /**

     * @return null|int
     */
    public function getWidthInMillimeter()
    {
        return $this->widthInMillimeter;
    }

    /**

     * @return null|int
     */
    public function getWeightInGram()
    {
        return $this->weightInGram;
    }

    /**
     * @param ?int $heightInMillimeter
     * @return $this
     */
    public function withHeightInMillimeter(?int $heightInMillimeter)
    {
        $this->heightInMillimeter = $heightInMillimeter;

        return $this;
    }

    /**
     * @param ?int $lengthInMillimeter
     * @return $this
     */
    public function withLengthInMillimeter(?int $lengthInMillimeter)
    {
        $this->lengthInMillimeter = $lengthInMillimeter;

        return $this;
    }

    /**
     * @param ?int $widthInMillimeter
     * @return $this
     */
    public function withWidthInMillimeter(?int $widthInMillimeter)
    {
        $this->widthInMillimeter = $widthInMillimeter;

        return $this;
    }

    /**
     * @param ?int $weightInGram
     * @return $this
     */
    public function withWeightInGram(?int $weightInGram)
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
