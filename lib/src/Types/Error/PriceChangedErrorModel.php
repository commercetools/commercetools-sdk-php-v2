<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Error\ErrorObjectModel;

class PriceChangedErrorModel extends ErrorObjectModel implements PriceChangedError {
    const DISCRIMINATOR_VALUE = 'PriceChanged';

    /**
     * @var array
     */
    protected $lineItems;
    /**
     * @var mixed
     */
    protected $shipping;

    /**
     * @return array
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            $value = $this->raw(PriceChangedError::FIELD_LINE_ITEMS);
            $value = (array)$value;
            $this->lineItems = $value;
        }
        return $this->lineItems;
    }
    /**
     * @return mixed
     */
    public function getShipping()
    {
        if (is_null($this->shipping)) {
            $value = $this->raw(PriceChangedError::FIELD_SHIPPING);
            $this->shipping = $value;
        }
        return $this->shipping;
    }

    /**
     * @param $lineItems
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }
    /**
     * @param $shipping
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

}
