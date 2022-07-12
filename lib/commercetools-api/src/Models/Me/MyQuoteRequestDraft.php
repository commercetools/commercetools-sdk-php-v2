<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyQuoteRequestDraft extends JsonObject
{
    public const FIELD_CART = 'cart';
    public const FIELD_VERSION = 'version';
    public const FIELD_COMMENT = 'comment';

    /**
     * <p>ResourceIdentifier to the Cart from which this quote request is created.</p>
     *

     * @return null|CartResourceIdentifier
     */
    public function getCart();

    /**
     * <p>Current version of the Cart.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Text message included in the request.</p>
     *

     * @return null|string
     */
    public function getComment();

    /**
     * @param ?CartResourceIdentifier $cart
     */
    public function setCart(?CartResourceIdentifier $cart): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void;
}
