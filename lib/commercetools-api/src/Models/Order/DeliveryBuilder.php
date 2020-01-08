<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<Delivery>
 */
final class DeliveryBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DeliveryItemCollection
     */
    private $items;

    /**
     * @var ?ParcelCollection
     */
    private $parcels;

    /**
     * @var Address|?AddressBuilder
     */
    private $address;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Items which are shipped in this delivery regardless their distribution over several parcels.
     * Can also be specified individually for each Parcel.</p>.
     *
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return null|ParcelCollection
     */
    public function getParcels()
    {
        return $this->parcels;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        return $this->address instanceof AddressBuilder ? $this->address->build() : $this->address;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return $this
     */
    public function withParcels(?ParcelCollection $parcels)
    {
        $this->parcels = $parcels;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddress(?Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    public function build(): Delivery
    {
        return new DeliveryModel(
            $this->id,
            $this->createdAt,
            $this->items,
            $this->parcels,
            ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address)
        );
    }

    public static function of(): DeliveryBuilder
    {
        return new self();
    }
}
