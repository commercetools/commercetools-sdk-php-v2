<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<InventoryEntryDraft>
 */
final class InventoryEntryDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $supplyChannel;

    /**

     * @var ?int
     */
    private $quantityOnStock;

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

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

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
     * <p>User-defined unique identifier for the InventoryEntry.</p>
     * <p>This field is optional for backwards compatibility reasons, but we strongly recommend setting it. Keys are mandatory for importing InventoryEntries with the <a href="/../api/import-export/overview">Import API</a> and the <a href="/../merchant-center/import-data">Merchant Center</a>.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p><a href="ctp:api:type:Channel">Channel</a> that supplies this InventoryEntry.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * <p>Overall amount of stock.</p>
     *

     * @return null|int
     */
    public function getQuantityOnStock()
    {
        return $this->quantityOnStock;
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

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
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
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     * @return $this
     */
    public function withSupplyChannel(?ChannelResourceIdentifier $supplyChannel)
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
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withSupplyChannel() instead
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelResourceIdentifierBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): InventoryEntryDraft
    {
        return new InventoryEntryDraftModel(
            $this->sku,
            $this->key,
            $this->supplyChannel instanceof ChannelResourceIdentifierBuilder ? $this->supplyChannel->build() : $this->supplyChannel,
            $this->quantityOnStock,
            $this->minCartQuantity,
            $this->maxCartQuantity,
            $this->restockableInDays,
            $this->expectedDelivery,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): InventoryEntryDraftBuilder
    {
        return new self();
    }
}
