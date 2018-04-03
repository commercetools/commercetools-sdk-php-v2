<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Error\ErrorObjectModel;

class OutOfStockErrorModel extends ErrorObjectModel implements OutOfStockError {
    const DISCRIMINATOR_VALUE = 'OutOfStock';

    /**
     * @var array
     */
    protected $lineItems;
    /**
     * @var array
     */
    protected $skus;

    /**
     * @return array
     */
    public function getLineItems()
    {
        if (is_null($this->lineItems)) {
            $value = $this->raw(OutOfStockError::FIELD_LINE_ITEMS);
            $value = (array)$value;
            $this->lineItems = $value;
        }
        return $this->lineItems;
    }
    /**
     * @return array
     */
    public function getSkus()
    {
        if (is_null($this->skus)) {
            $value = $this->raw(OutOfStockError::FIELD_SKUS);
            $value = (array)$value;
            $this->skus = $value;
        }
        return $this->skus;
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
     * @param $skus
     * @return $this
     */
    public function setSkus($skus)
    {
        $this->skus = $skus;

        return $this;
    }

}
