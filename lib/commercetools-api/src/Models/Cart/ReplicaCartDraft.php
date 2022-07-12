<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReplicaCartDraft extends JsonObject
{
    public const FIELD_REFERENCE = 'reference';
    public const FIELD_KEY = 'key';

    /**

     * @return null|mixed
     */
    public function getReference();

    /**
     * <p>User-specific unique identifier of the cart.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?JsonObject $reference
     */
    public function setReference(?JsonObject $reference): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
