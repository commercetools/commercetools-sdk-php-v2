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
     * @var ?float
     */
    private $quantityOnStock;

    /**
     * @var ?float
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
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Maps to <code>Inventory.quantityOnStock</code></p>
     *
     * @return null|float
     */
    public function getQuantityOnStock()
    {
        return $this->quantityOnStock;
    }

    /**
     * <p>Maps to <code>Inventory.restockableInDays</code></p>
     *
     * @return null|float
     */
    public function getRestockableInDays()
    {
        return $this->restockableInDays;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery()
    {
        return $this->expectedDelivery;
    }

    /**
     * <p>References a channel by its key.</p>
     *
     * @return null|ChannelKeyReference
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelKeyReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * <p>Maps to <code>Inventory.custom</code>.</p>
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
     * @param ?float $quantityOnStock
     * @return $this
     */
    public function withQuantityOnStock(?float $quantityOnStock)
    {
        $this->quantityOnStock = $quantityOnStock;

        return $this;
    }

    /**
     * @param ?float $restockableInDays
     * @return $this
     */
    public function withRestockableInDays(?float $restockableInDays)
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
     * @return $this
     */
    public function withSupplyChannelBuilder(?ChannelKeyReferenceBuilder $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

    /**
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
