<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ParcelMeasurements extends JsonObject
{
    public const FIELD_HEIGHT_IN_MILLIMETER = 'heightInMillimeter';
    public const FIELD_LENGTH_IN_MILLIMETER = 'lengthInMillimeter';
    public const FIELD_WIDTH_IN_MILLIMETER = 'widthInMillimeter';
    public const FIELD_WEIGHT_IN_GRAM = 'weightInGram';

    /**

     * @return null|float
     */
    public function getHeightInMillimeter();

    /**

     * @return null|float
     */
    public function getLengthInMillimeter();

    /**

     * @return null|float
     */
    public function getWidthInMillimeter();

    /**

     * @return null|float
     */
    public function getWeightInGram();

    /**
     * @param ?float $heightInMillimeter
     */
    public function setHeightInMillimeter(?float $heightInMillimeter): void;

    /**
     * @param ?float $lengthInMillimeter
     */
    public function setLengthInMillimeter(?float $lengthInMillimeter): void;

    /**
     * @param ?float $widthInMillimeter
     */
    public function setWidthInMillimeter(?float $widthInMillimeter): void;

    /**
     * @param ?float $weightInGram
     */
    public function setWeightInGram(?float $weightInGram): void;
}
