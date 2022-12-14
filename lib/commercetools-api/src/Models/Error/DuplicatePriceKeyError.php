<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\Price;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DuplicatePriceKeyError extends ErrorObject
{
    public const FIELD_CONFLICTING_PRICE = 'conflictingPrice';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Duplicate price key: $priceKey. The price key must be unique per variant.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Conflicting Embedded Price.</p>
     *

     * @return null|Price
     */
    public function getConflictingPrice();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?Price $conflictingPrice
     */
    public function setConflictingPrice(?Price $conflictingPrice): void;
}
