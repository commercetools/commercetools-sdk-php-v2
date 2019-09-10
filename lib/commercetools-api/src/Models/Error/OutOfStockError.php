<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

interface OutOfStockError extends ErrorObject
{
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_SKUS = 'skus';

    /**
     * @return null|array
     */
    public function getLineItems();

    /**
     * @return null|array
     */
    public function getSkus();

    public function setLineItems(?array $lineItems): void;

    public function setSkus(?array $skus): void;
}
