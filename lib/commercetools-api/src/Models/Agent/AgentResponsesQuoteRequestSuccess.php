<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\QuoteRequest\QuoteRequest;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentResponsesQuoteRequestSuccess extends AgentResponsesSuccess
{
    public const FIELD_ENTITY = 'entity';
    public const FIELD_CART_ID = 'cartId';

    /**
     * <p>The created <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> in full commercetools REST representation.</p>
     *

     * @return null|QuoteRequest
     */
    public function getEntity();

    /**
     * <p><code>id</code> of the underlying <a href="ctp:api:type:Cart">Cart</a>.</p>
     *

     * @return null|string
     */
    public function getCartId();

    /**
     * @param ?QuoteRequest $entity
     */
    public function setEntity(?QuoteRequest $entity): void;

    /**
     * @param ?string $cartId
     */
    public function setCartId(?string $cartId): void;
}
