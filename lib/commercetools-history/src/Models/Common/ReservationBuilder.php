<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Reservation>
 */
final class ReservationBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $owner;

    /**

     * @var ?string
     */
    private $createdAt;

    /**

     * @var ?string
     */
    private $checkoutStartedAt;

    /**

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>A Reference represents a loose reference to another resource in the same Project identified by its <code>id</code>. The <code>typeId</code> indicates the type of the referenced resource. Each resource type has its corresponding Reference type, like <a href="ctp:api:type:ChannelReference">ChannelReference</a>.  A referenced resource can be embedded through <a href="/general-concepts#reference-expansion">Reference Expansion</a>. The expanded reference is the value of an additional <code>obj</code> field then.</p>
     *

     * @return null|Reference
     */
    public function getOwner()
    {
        return $this->owner instanceof ReferenceBuilder ? $this->owner->build() : $this->owner;
    }

    /**

     * @return null|string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**

     * @return null|string
     */
    public function getCheckoutStartedAt()
    {
        return $this->checkoutStartedAt;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?Reference $owner
     * @return $this
     */
    public function withOwner(?Reference $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @param ?string $createdAt
     * @return $this
     */
    public function withCreatedAt(?string $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?string $checkoutStartedAt
     * @return $this
     */
    public function withCheckoutStartedAt(?string $checkoutStartedAt)
    {
        $this->checkoutStartedAt = $checkoutStartedAt;

        return $this;
    }

    /**
     * @deprecated use withOwner() instead
     * @return $this
     */
    public function withOwnerBuilder(?ReferenceBuilder $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    public function build(): Reservation
    {
        return new ReservationModel(
            $this->quantity,
            $this->owner instanceof ReferenceBuilder ? $this->owner->build() : $this->owner,
            $this->createdAt,
            $this->checkoutStartedAt
        );
    }

    public static function of(): ReservationBuilder
    {
        return new self();
    }
}
