<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLOutOfStockError extends GraphQLErrorObject
{
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_SKUS = 'skus';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Unique identifiers of the Line Items that are out of stock.</p>
     *

     * @return null|array
     */
    public function getLineItems();

    /**
     * <p>SKUs of the Line Items that are out of stock.</p>
     *

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
