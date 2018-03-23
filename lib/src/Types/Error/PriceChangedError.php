<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

interface PriceChangedError extends ErrorObject {
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_SHIPPING = 'shipping';

    /**
     * @return array
     */
    public function getLineItems();

    /**
     * @return mixed
     */
    public function getShipping();

    /**
     * @param array $lineItems
     * @return $this
     */
    public function setLineItems($lineItems);

    /**
     * @param mixed $shipping
     * @return $this
     */
    public function setShipping($shipping);

}
