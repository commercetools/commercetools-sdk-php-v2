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
     * <p>Height of the Parcel.</p>
     *

     * @return null|int
     */
    public function getHeightInMillimeter();

    /**
     * <p>Length of the Parcel.</p>
     *

     * @return null|int
     */
    public function getLengthInMillimeter();

    /**
     * <p>Width of the Parcel.</p>
     *

     * @return null|int
     */
    public function getWidthInMillimeter();

    /**
     * <p>Weight of the Parcel.</p>
     *

     * @return null|int
     */
    public function getWeightInGram();

    /**
     * @param ?int $heightInMillimeter
     */
    public function setHeightInMillimeter(?int $heightInMillimeter): void;

    /**
     * @param ?int $lengthInMillimeter
     */
    public function setLengthInMillimeter(?int $lengthInMillimeter): void;

    /**
     * @param ?int $widthInMillimeter
     */
    public function setWidthInMillimeter(?int $widthInMillimeter): void;

    /**
     * @param ?int $weightInGram
     */
    public function setWeightInGram(?int $weightInGram): void;
}
