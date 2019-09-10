<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

interface PriceChangedError extends ErrorObject
{
    const FIELD_LINE_ITEMS = 'lineItems';
    const FIELD_SHIPPING = 'shipping';

    /**
     * @return null|array
     */
    public function getLineItems();

    /**
     * @return null|bool
     */
    public function getShipping();

    public function setLineItems(?array $lineItems): void;

    public function setShipping(?bool $shipping): void;
}
