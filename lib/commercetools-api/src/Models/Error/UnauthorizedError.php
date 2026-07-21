<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface UnauthorizedError extends ErrorObject
{
    public const FIELD_STORES_WITHOUT_PERMISSION = 'storesWithoutPermission';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Customer reference expansion not permitted on my business unit&quot;</code> or <code>&quot;Not allowed to edit this CartDiscount.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Keys of <a href="ctp:api:type:Store">Stores</a> for which the required permission to modify is missing.</p>
     * <p>This field is returned only for <a href="ctp:api:type:CartDiscount">Cart Discounts</a>.</p>
     *

     * @return null|array
     */
    public function getStoresWithoutPermission();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?array $storesWithoutPermission
     */
    public function setStoresWithoutPermission(?array $storesWithoutPermission): void;
}
