<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyQuoteRequestDraft extends JsonObject
{
    public const FIELD_CART_ID = 'cartId';
    public const FIELD_CART_VERSION = 'cartVersion';
    public const FIELD_COMMENT = 'comment';

    /**
     * <p><code>id</code> of the Cart from which the Quote Request is created. Carts with <a href="ctp:api:type:DiscountCode">Discount Codes</a> and Carts with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a> are not supported.
     * The Cart must have a <code>shippingAddress</code> defined, otherwise an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned when <a href="ctp:api:endpoint:/{projectKey}/me/quote-requests:POST">creating a Quote Request</a>.</p>
     *

     * @return null|string
     */
    public function getCartId();

    /**
     * <p>Current version of the Cart.</p>
     *

     * @return null|int
     */
    public function getCartVersion();

    /**
     * <p>Message from the Buyer included in the Quote Request.</p>
     *

     * @return null|string
     */
    public function getComment();

    /**
     * @param ?string $cartId
     */
    public function setCartId(?string $cartId): void;

    /**
     * @param ?int $cartVersion
     */
    public function setCartVersion(?int $cartVersion): void;

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void;
}
