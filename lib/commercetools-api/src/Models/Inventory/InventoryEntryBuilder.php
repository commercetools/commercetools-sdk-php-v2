<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<InventoryEntry>
 */
final class InventoryEntryBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var null|ChannelReference|ChannelReferenceBuilder
     */
    private $supplyChannel;

    /**

     * @var ?int
     */
    private $quantityOnStock;

    /**

     * @var ?int
     */
    private $availableQuantity;

    /**

     * @var ?int
     */
    private $minCartQuantity;

    /**

     * @var ?int
     */
    private $maxCartQuantity;

    /**

     * @var ?int
     */
    private $restockableInDays;

    /**

     * @var ?DateTimeImmutable
     */
    private $expectedDelivery;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * <p>Unique identifier of the InventoryEntry.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the InventoryEntry.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the InventoryEntry was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the InventoryEntry was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>IDs and references that last modified the InventoryEntry.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>IDs and references that created the InventoryEntry.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>User-defined unique identifier of the InventoryEntry.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p><a href="ctp:api:type:ProductVariant">ProductVariant</a> <code>sku</code> of the InventoryEntry.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p><a href="ctp:api:type:Channel">Channel</a> that supplies this InventoryEntry.</p>
     *

     * @return null|ChannelReference
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * <p>Overall amount of stock (<code>availableQuantity</code> + reserved).</p>
     *

     * @return null|int
     */
    public function getQuantityOnStock()
    {
        return $this->quantityOnStock;
    }

    /**
     * <p>Available amount of stock (<code>quantityOnStock</code> - reserved).</p>
     *

     * @return null|int
     */
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    /**
     * <p>Minimum quantity that can be added to a Cart. See <a href="/../api/carts-orders-overview#quantity-limits">Quantity limits</a>.</p>
     *

     * @return null|int
     */
    public function getMinCartQuantity()
    {
        return $this->minCartQuantity;
    }

    /**
     * <p>Maximum quantity that can be added to a Cart. See <a href="/../api/carts-orders-overview#quantity-limits">Quantity limits</a>.</p>
     *

     * @return null|int
     */
    public function getMaxCartQuantity()
    {
        return $this->maxCartQuantity;
    }

    /**
     * <p>How often the InventoryEntry is restocked (in days).</p>
     *

     * @return null|int
     */
    public function getRestockableInDays()
    {
        return $this->restockableInDays;
    }

    /**
     * <p>Date and time of the next restock.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery()
    {
        return $this->expectedDelivery;
    }

    /**
     * <p>Custom Fields of the InventoryEntry.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param ?ChannelReference $supplyChannel
     * @return $this
     */
    public function withSupplyChannel(?ChannelReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @param ?int $quantityOnStock
     * @return $this
     */
    public function withQuantityOnStock(?int $quantityOnStock)
    {
        $this->quantityOnStock = $quantityOnStock;

        return $this;
    }

    /**
     * @param ?int $availableQuantity
     * @return $this
     */
    public function withAvailableQuantity(?int $availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;

        return $this;
    }

    /**
     * @param ?int $minCartQuantity
     * @return $this
     */
    public function withMinCartQuantity(?int $minCartQuantity)
    {
        $this->minCartQuantity = $minCartQuantity;

        return $this;
    }

    /**
     * @param ?int $maxCartQuantity
     * @return $this
     */
    public function withMaxCartQuantity(?int $maxCartQuantity)
    {
        $this->maxCartQuantity = $maxCartQuantity;

        return $this;
    }

    /**
     * @param ?int $restockableInDays
     * @return $this
     */
    public function withRestockableInDays(?int $restockableInDays)
    {
        $this->restockableInDays = $restockableInDays;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $expectedDelivery
     * @return $this
     */
    public function withExpectedDelivery(?DateTimeImmutable $expectedDelivery)
    {
        $this->expectedDelivery = $expectedDelivery;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withSupplyChannel() instead
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelReferenceBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): InventoryEntry
    {
        return new InventoryEntryModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->key,
            $this->sku,
            $this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel,
            $this->quantityOnStock,
            $this->availableQuantity,
            $this->minCartQuantity,
            $this->maxCartQuantity,
            $this->restockableInDays,
            $this->expectedDelivery,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): InventoryEntryBuilder
    {
        return new self();
    }
}
