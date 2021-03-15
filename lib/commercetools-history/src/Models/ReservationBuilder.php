<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

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
