<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Inventories;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ChannelKeyReferenceBuilder;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceBuilder;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomBuilder;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<InventoryImport>
 */
final class InventoryImportBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?int
     */
    private $quantityOnStock;

    /**

     * @var ?int
     */
    private $restockableInDays;

    /**

     * @var ?DateTimeImmutable
     */
    private $expectedDelivery;

    /**

     * @var null|ChannelKeyReference|ChannelKeyReferenceBuilder
     */
    private $supplyChannel;

    /**

     * @var null|Custom|CustomBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique identifier. If an <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>InventoryEntry.sku</code></p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Maps to <code>InventoryEntry.quantityOnStock</code></p>
     *

     * @return null|int
     */
    public function getQuantityOnStock()
    {
        return $this->quantityOnStock;
    }

    /**
     * <p>Maps to <code>InventoryEntry.restockableInDays</code></p>
     *

     * @return null|int
     */
    public function getRestockableInDays()
    {
        return $this->restockableInDays;
    }

    /**
     * <p>Maps to <code>InventoryEntry.expectedDelivery</code></p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery()
    {
        return $this->expectedDelivery;
    }

    /**
     * <p>Maps to <code>InventoryEntry.supplyChannel</code>. If the referenced <a href="ctp:api:type:Channel">Channel</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Channel is created.</p>
     *

     * @return null|ChannelKeyReference
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelKeyReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * <p>Maps to <code>InventoryEntry.custom</code>.</p>
     *

     * @return null|Custom
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom;
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
     * @param ?int $quantityOnStock
     * @return $this
     */
    public function withQuantityOnStock(?int $quantityOnStock)
    {
        $this->quantityOnStock = $quantityOnStock;

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
     * @param ?ChannelKeyReference $supplyChannel
     * @return $this
     */
    public function withSupplyChannel(?ChannelKeyReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @param ?Custom $custom
     * @return $this
     */
    public function withCustom(?Custom $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withSupplyChannel() instead
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelKeyReferenceBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): InventoryImport
    {
        return new InventoryImportModel(
            $this->key,
            $this->sku,
            $this->quantityOnStock,
            $this->restockableInDays,
            $this->expectedDelivery,
            $this->supplyChannel instanceof ChannelKeyReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel,
            $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): InventoryImportBuilder
    {
        return new self();
    }
}
