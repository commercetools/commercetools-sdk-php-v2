<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class InventoryEntryDeletedMessagePayloadModel extends JsonObjectModel implements InventoryEntryDeletedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'InventoryEntryDeleted';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ChannelReference
     */
    protected $supplyChannel;

    /**
     * @var ?string
     */
    protected $sku;

    public function __construct(
        string $type = null,
        ChannelReference $supplyChannel = null,
        string $sku = null
    ) {
        $this->type = $type;
        $this->supplyChannel = $supplyChannel;
        $this->sku = $sku;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|ChannelReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(InventoryEntryDeletedMessagePayload::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelReferenceModel::of($data);
        }

        return $this->supplyChannel;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(InventoryEntryDeletedMessagePayload::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setSupplyChannel(?ChannelReference $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
}
