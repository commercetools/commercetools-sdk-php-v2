<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class PriceTierModel extends JsonObjectModel implements PriceTier
{
    /**
     * @var int
     */
    protected $minimumQuantity;
    /**
     * @var Money
     */
    protected $value;

    /**
     * @return int
     */
    public function getMinimumQuantity()
    {
        if (is_null($this->minimumQuantity)) {
            $value = $this->raw(PriceTier::FIELD_MINIMUM_QUANTITY);
            $value = (int)$value;
            $this->minimumQuantity = $value;
        }
        return $this->minimumQuantity;
    }
    /**
     * @return Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(PriceTier::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @param int $minimumQuantity
     * @return $this
     */
    public function setMinimumQuantity(int $minimumQuantity)
    {
        $this->minimumQuantity = (int)$minimumQuantity;

        return $this;
    }
    /**
     * @param Money $value
     * @return $this
     */
    public function setValue(Money $value)
    {
        $this->value = $value;

        return $this;
    }

}
