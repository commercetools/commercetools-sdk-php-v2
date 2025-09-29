<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface RecurringOrderDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_CART = 'cart';
    public const FIELD_CART_VERSION = 'cartVersion';
    public const FIELD_STARTS_AT = 'startsAt';
    public const FIELD_EXPIRES_AT = 'expiresAt';
    public const FIELD_STATE = 'state';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:RecurringOrder">RecurringOrder</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Cart from which the RecurringOrder is created.</p>
     *

     * @return null|CartResourceIdentifier
     */
    public function getCart();

    /**
     * <p>Current version of the referenced <a href="ctp:api:type:Cart">Cart</a>.</p>
     *

     * @return null|int
     */
    public function getCartVersion();

    /**
     * <p>Date and time (UTC) when the RecurringOrder will start. When specified, the date and time must be in the future. If not specified, the recurring order will start immediately.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getStartsAt();

    /**
     * <p>Date and time (UTC) when the RecurringOrder will expire.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt();

    /**
     * <p>State for the RecurringOrder in a custom workflow.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * <p>Custom Fields for the RecurringOrder.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?CartResourceIdentifier $cart
     */
    public function setCart(?CartResourceIdentifier $cart): void;

    /**
     * @param ?int $cartVersion
     */
    public function setCartVersion(?int $cartVersion): void;

    /**
     * @param ?DateTimeImmutable $startsAt
     */
    public function setStartsAt(?DateTimeImmutable $startsAt): void;

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void;

    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
