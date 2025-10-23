<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Reservation extends JsonObject
{

    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_OWNER = 'owner';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_CHECKOUT_STARTED_AT = 'checkoutStartedAt';

    /**

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>A Reference represents a loose reference to another resource in the same Project identified by its <code>id</code>. The <code>typeId</code> indicates the type of the referenced resource. Each resource type has its corresponding Reference type, like <a href="ctp:api:type:ChannelReference">ChannelReference</a>.  A referenced resource can be embedded through <a href="/general-concepts#reference-expansion">Reference Expansion</a>. The expanded reference is the value of an additional <code>obj</code> field then.</p>
     *

     * @return null|Reference
     */
    public function getOwner();

    /**

     * @return null|string
     */
    public function getCreatedAt();

    /**

     * @return null|string
     */
    public function getCheckoutStartedAt();

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?Reference $owner
     */
    public function setOwner(?Reference $owner): void;

    /**
     * @param ?string $createdAt
     */
    public function setCreatedAt(?string $createdAt): void;

    /**
     * @param ?string $checkoutStartedAt
     */
    public function setCheckoutStartedAt(?string $checkoutStartedAt): void;
}
