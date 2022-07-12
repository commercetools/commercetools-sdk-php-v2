<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OutOfStockError extends ErrorObject
{
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_SKUS = 'skus';

    /**

     * @return null|array
     */
    public function getLineItems();

    /**

     * @return null|array
     */
    public function getSkus();

    /**
     * @param ?array $lineItems
     */
    public function setLineItems(?array $lineItems): void;

    /**
     * @param ?array $skus
     */
    public function setSkus(?array $skus): void;
}
