<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

interface PriceTier extends JsonObject {
    const FIELD_MINIMUM_QUANTITY = 'minimumQuantity';
    const FIELD_VALUE = 'value';

    /**
     * @return int
     */
    public function getMinimumQuantity();

    /**
     * @return Money
     */
    public function getValue();

    /**
     * @param int $minimumQuantity
     * @return $this
     */
    public function setMinimumQuantity(int $minimumQuantity);

    /**
     * @param Money $value
     * @return $this
     */
    public function setValue(Money $value);

}
