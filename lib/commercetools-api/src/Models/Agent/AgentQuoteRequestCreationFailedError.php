<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\ErrorObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentQuoteRequestCreationFailedError extends ErrorObject
{
    public const FIELD_CART_ID = 'cartId';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Plain text description of the error.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p><code>id</code> of the orphaned Cart, for retry or cleanup.</p>
     *

     * @return null|string
     */
    public function getCartId();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $cartId
     */
    public function setCartId(?string $cartId): void;
}
