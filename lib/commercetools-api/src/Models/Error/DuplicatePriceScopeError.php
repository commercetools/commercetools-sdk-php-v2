<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DuplicatePriceScopeError extends ErrorObject
{
    public const FIELD_CONFLICTING_PRICES = 'conflictingPrices';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Duplicate price scope: $priceScope. The combination of currency, country, customerGroup and channel must be unique for each price of a product variant.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Conflicting Embedded Prices.</p>
     *

     * @return null|PriceCollection
     */
    public function getConflictingPrices();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?PriceCollection $conflictingPrices
     */
    public function setConflictingPrices(?PriceCollection $conflictingPrices): void;
}
