<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

interface OutOfStockError extends ErrorObject {
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_SKUS = 'skus';

    /**
     * @return array
     */
    public function getLineItems();

    /**
     * @return array
     */
    public function getSkus();

    /**
     * @param array $lineItems
     * @return $this
     */
    public function setLineItems($lineItems);

    /**
     * @param array $skus
     * @return $this
     */
    public function setSkus($skus);

}
