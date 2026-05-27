<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InventoryEntryReorderPointMessagePayload>
 */
final class InventoryEntryReorderPointMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?int
     */
    private $quantityOnStock;

    /**

     * @var null|ChannelReference|ChannelReferenceBuilder
     */
    private $supplyChannel;

    /**
     * <p>The <code>sku</code> of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> whose <code>quantityOnStock</code> reached the configured reorder point level.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>The <code>quantityOnStock</code> of the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> at the time the reorder point level was reached.</p>
     *

     * @return null|int
     */
    public function getQuantityOnStock()
    {
        return $this->quantityOnStock;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Channel">Channel</a> where the <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> <code>quantityOnStock</code> reached the configured reorder point level.</p>
     *

     * @return null|ChannelReference
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
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
     * @param ?int $quantityOnStock
     * @return $this
     */
    public function withQuantityOnStock(?int $quantityOnStock)
    {
        $this->quantityOnStock = $quantityOnStock;

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
     * @deprecated use withSupplyChannel() instead
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelReferenceBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    public function build(): InventoryEntryReorderPointMessagePayload
    {
        return new InventoryEntryReorderPointMessagePayloadModel(
            $this->sku,
            $this->quantityOnStock,
            $this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel
        );
    }

    public static function of(): InventoryEntryReorderPointMessagePayloadBuilder
    {
        return new self();
    }
}
