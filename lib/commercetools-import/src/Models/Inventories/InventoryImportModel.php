<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Inventories;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ChannelKeyReferenceModel;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceModel;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomModel;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class InventoryImportModel extends JsonObjectModel implements InventoryImport
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?int
     */
    protected $quantityOnStock;

    /**
     *
     * @var ?int
     */
    protected $restockableInDays;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $expectedDelivery;

    /**
     *
     * @var ?ChannelKeyReference
     */
    protected $supplyChannel;

    /**
     *
     * @var ?Custom
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $sku = null,
        ?int $quantityOnStock = null,
        ?int $restockableInDays = null,
        ?DateTimeImmutable $expectedDelivery = null,
        ?ChannelKeyReference $supplyChannel = null,
        ?Custom $custom = null
    ) {
        $this->key = $key;
        $this->sku = $sku;
        $this->quantityOnStock = $quantityOnStock;
        $this->restockableInDays = $restockableInDays;
        $this->expectedDelivery = $expectedDelivery;
        $this->supplyChannel = $supplyChannel;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined unique identifier. If an <a href="ctp:api:type:InventoryEntry">InventoryEntry</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Maps to <code>InventoryEntry.sku</code></p>
     *
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>Maps to <code>InventoryEntry.quantityOnStock</code></p>
     *
     *
     * @return null|int
     */
    public function getQuantityOnStock()
    {
        if (is_null($this->quantityOnStock)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY_ON_STOCK);
            if (is_null($data)) {
                return null;
            }
            $this->quantityOnStock = (int) $data;
        }

        return $this->quantityOnStock;
    }

    /**
     * <p>Maps to <code>InventoryEntry.restockableInDays</code></p>
     *
     *
     * @return null|int
     */
    public function getRestockableInDays()
    {
        if (is_null($this->restockableInDays)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RESTOCKABLE_IN_DAYS);
            if (is_null($data)) {
                return null;
            }
            $this->restockableInDays = (int) $data;
        }

        return $this->restockableInDays;
    }

    /**
     * <p>Maps to <code>InventoryEntry.expectedDelivery</code></p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery()
    {
        if (is_null($this->expectedDelivery)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXPECTED_DELIVERY);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->expectedDelivery = $data;
        }

        return $this->expectedDelivery;
    }

    /**
     * <p>Maps to <code>InventoryEntry.supplyChannel</code>. If the referenced <a href="ctp:api:type:Channel">Channel</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Channel is created.</p>
     *
     *
     * @return null|ChannelKeyReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelKeyReferenceModel::of($data);
        }

        return $this->supplyChannel;
    }

    /**
     * <p>Maps to <code>InventoryEntry.custom</code>.</p>
     *
     *
     * @return null|Custom
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?int $quantityOnStock
     */
    public function setQuantityOnStock(?int $quantityOnStock): void
    {
        $this->quantityOnStock = $quantityOnStock;
    }

    /**
     * @param ?int $restockableInDays
     */
    public function setRestockableInDays(?int $restockableInDays): void
    {
        $this->restockableInDays = $restockableInDays;
    }

    /**
     * @param ?DateTimeImmutable $expectedDelivery
     */
    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void
    {
        $this->expectedDelivery = $expectedDelivery;
    }

    /**
     * @param ?ChannelKeyReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelKeyReference $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void
    {
        $this->custom = $custom;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[InventoryImport::FIELD_EXPECTED_DELIVERY]) && $data[InventoryImport::FIELD_EXPECTED_DELIVERY] instanceof \DateTimeImmutable) {
            $data[InventoryImport::FIELD_EXPECTED_DELIVERY] = $data[InventoryImport::FIELD_EXPECTED_DELIVERY]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
