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

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Some line items are out of stock at the time of placing the order: $itemSku.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

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
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?array $lineItems
     */
    public function setLineItems(?array $lineItems): void;

    /**
     * @param ?array $skus
     */
    public function setSkus(?array $skus): void;
}
