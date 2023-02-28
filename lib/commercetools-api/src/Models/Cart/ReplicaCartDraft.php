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
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> that is replicated.</p>
     *

     * @return null|mixed
     */
    public function getReference();

    /**
     * <p>User-defined unique identifier for the Cart.</p>
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
