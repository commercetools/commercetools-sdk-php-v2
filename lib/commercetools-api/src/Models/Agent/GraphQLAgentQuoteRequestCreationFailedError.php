<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\GraphQLErrorObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLAgentQuoteRequestCreationFailedError extends GraphQLErrorObject
{
    public const FIELD_CART_ID = 'cartId';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>id</code> of the orphaned Cart, for retry or cleanup.</p>
     *

     * @return null|string
     */
    public function getCartId();

    /**
     * @param ?string $cartId
     */
    public function setCartId(?string $cartId): void;
}
