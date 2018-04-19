<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

interface ParcelMeasurements extends JsonObject
{
    const FIELD_HEIGHT_IN_MILLIMETER = 'heightInMillimeter';
    const FIELD_LENGTH_IN_MILLIMETER = 'lengthInMillimeter';
    const FIELD_WIDTH_IN_MILLIMETER = 'widthInMillimeter';
    const FIELD_WEIGHT_IN_GRAM = 'weightInGram';

    /**
     * @return int
     */
    public function getHeightInMillimeter();

    /**
     * @return int
     */
    public function getLengthInMillimeter();

    /**
     * @return int
     */
    public function getWidthInMillimeter();

    /**
     * @return int
     */
    public function getWeightInGram();

    /**
     * @param int $heightInMillimeter
     * @return $this
     */
    public function setHeightInMillimeter(int $heightInMillimeter);

    /**
     * @param int $lengthInMillimeter
     * @return $this
     */
    public function setLengthInMillimeter(int $lengthInMillimeter);

    /**
     * @param int $widthInMillimeter
     * @return $this
     */
    public function setWidthInMillimeter(int $widthInMillimeter);

    /**
     * @param int $weightInGram
     * @return $this
     */
    public function setWeightInGram(int $weightInGram);

}
