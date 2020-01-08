<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class InventoryEntryDraftModel extends JsonObjectModel implements InventoryEntryDraft
{
    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $supplyChannel;

    /**
     * @var ?int
     */
    protected $quantityOnStock;

    /**
     * @var ?int
     */
    protected $restockableInDays;

    /**
     * @var ?DateTimeImmutable
     */
    protected $expectedDelivery;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    public function __construct(
        string $sku = null,
        ChannelResourceIdentifier $supplyChannel = null,
        int $quantityOnStock = null,
        int $restockableInDays = null,
        DateTimeImmutable $expectedDelivery = null,
        CustomFieldsDraft $custom = null
    ) {
        $this->sku = $sku;
        $this->supplyChannel = $supplyChannel;
        $this->quantityOnStock = $quantityOnStock;
        $this->restockableInDays = $restockableInDays;
        $this->expectedDelivery = $expectedDelivery;
        $this->custom = $custom;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(InventoryEntryDraft::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(InventoryEntryDraft::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->supplyChannel;
    }

    /**
     * @return null|int
     */
    public function getQuantityOnStock()
    {
        if (is_null($this->quantityOnStock)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(InventoryEntryDraft::FIELD_QUANTITY_ON_STOCK);
            if (is_null($data)) {
                return null;
            }
            $this->quantityOnStock = (int) $data;
        }

        return $this->quantityOnStock;
    }

    /**
     * @return null|int
     */
    public function getRestockableInDays()
    {
        if (is_null($this->restockableInDays)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(InventoryEntryDraft::FIELD_RESTOCKABLE_IN_DAYS);
            if (is_null($data)) {
                return null;
            }
            $this->restockableInDays = (int) $data;
        }

        return $this->restockableInDays;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery()
    {
        if (is_null($this->expectedDelivery)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(InventoryEntryDraft::FIELD_EXPECTED_DELIVERY);
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
     * <p>The custom fields.</p>.
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(InventoryEntryDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    public function setQuantityOnStock(?int $quantityOnStock): void
    {
        $this->quantityOnStock = $quantityOnStock;
    }

    public function setRestockableInDays(?int $restockableInDays): void
    {
        $this->restockableInDays = $restockableInDays;
    }

    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void
    {
        $this->expectedDelivery = $expectedDelivery;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY]) && $data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY] instanceof \DateTimeImmutable) {
            $data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY] = $data[InventoryEntryDraft::FIELD_EXPECTED_DELIVERY]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
