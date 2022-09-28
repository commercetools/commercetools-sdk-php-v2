<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface QuoteRequestDraft extends JsonObject
{
    public const FIELD_CART = 'cart';
    public const FIELD_CART_VERSION = 'cartVersion';
    public const FIELD_KEY = 'key';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_STATE = 'state';

    /**
     * <p>Cart for which a Quote is requested.
     * Anonymous Carts, Carts with <a href="ctp:api:type:DiscountCode">Discount Codes</a>, or Carts with a <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a> are not supported.</p>
     *

     * @return null|CartResourceIdentifier
     */
    public function getCart();

    /**
     * <p>Current version of the referenced Cart.</p>
     *

     * @return null|int
     */
    public function getCartVersion();

    /**
     * <p>User-defined unique identifier for the QuoteRequest.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Message from the Buyer included in the Quote Request.</p>
     *

     * @return null|string
     */
    public function getComment();

    /**
     * <p>Custom Fields to be added to the Quote Request.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p><a href="ctp:api:type:State">State</a> of this Quote Request.
     * This reference can point to a State in a custom workflow.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**
     * @param ?CartResourceIdentifier $cart
     */
    public function setCart(?CartResourceIdentifier $cart): void;

    /**
     * @param ?int $cartVersion
     */
    public function setCartVersion(?int $cartVersion): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;
}
