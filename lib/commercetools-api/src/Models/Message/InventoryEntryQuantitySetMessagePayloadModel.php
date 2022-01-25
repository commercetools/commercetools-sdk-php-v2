<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InventoryEntryQuantitySetMessagePayloadModel extends JsonObjectModel implements InventoryEntryQuantitySetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'InventoryEntryQuantitySet';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $oldQuantityOnStock;

    /**
     * @var ?int
     */
    protected $newQuantityOnStock;

    /**
     * @var ?int
     */
    protected $oldAvailableQuantity;

    /**
     * @var ?int
     */
    protected $newAvailableQuantity;

    /**
     * @var ?ChannelReference
     */
    protected $supplyChannel;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $oldQuantityOnStock = null,
        ?int $newQuantityOnStock = null,
        ?int $oldAvailableQuantity = null,
        ?int $newAvailableQuantity = null,
        ?ChannelReference $supplyChannel = null
    ) {
        $this->oldQuantityOnStock = $oldQuantityOnStock;
        $this->newQuantityOnStock = $newQuantityOnStock;
        $this->oldAvailableQuantity = $oldAvailableQuantity;
        $this->newAvailableQuantity = $newAvailableQuantity;
        $this->supplyChannel = $supplyChannel;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|int
     */
    public function getOldQuantityOnStock()
    {
        if (is_null($this->oldQuantityOnStock)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_OLD_QUANTITY_ON_STOCK);
            if (is_null($data)) {
                return null;
            }
            $this->oldQuantityOnStock = (int) $data;
        }

        return $this->oldQuantityOnStock;
    }

    /**
     * @return null|int
     */
    public function getNewQuantityOnStock()
    {
        if (is_null($this->newQuantityOnStock)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_NEW_QUANTITY_ON_STOCK);
            if (is_null($data)) {
                return null;
            }
            $this->newQuantityOnStock = (int) $data;
        }

        return $this->newQuantityOnStock;
    }

    /**
     * @return null|int
     */
    public function getOldAvailableQuantity()
    {
        if (is_null($this->oldAvailableQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_OLD_AVAILABLE_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->oldAvailableQuantity = (int) $data;
        }

        return $this->oldAvailableQuantity;
    }

    /**
     * @return null|int
     */
    public function getNewAvailableQuantity()
    {
        if (is_null($this->newAvailableQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_NEW_AVAILABLE_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->newAvailableQuantity = (int) $data;
        }

        return $this->newAvailableQuantity;
    }

    /**
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
     *
     * @return null|ChannelReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelReferenceModel::of($data);
        }

        return $this->supplyChannel;
    }


    /**
     * @param ?int $oldQuantityOnStock
     */
    public function setOldQuantityOnStock(?int $oldQuantityOnStock): void
    {
        $this->oldQuantityOnStock = $oldQuantityOnStock;
    }

    /**
     * @param ?int $newQuantityOnStock
     */
    public function setNewQuantityOnStock(?int $newQuantityOnStock): void
    {
        $this->newQuantityOnStock = $newQuantityOnStock;
    }

    /**
     * @param ?int $oldAvailableQuantity
     */
    public function setOldAvailableQuantity(?int $oldAvailableQuantity): void
    {
        $this->oldAvailableQuantity = $oldAvailableQuantity;
    }

    /**
     * @param ?int $newAvailableQuantity
     */
    public function setNewAvailableQuantity(?int $newAvailableQuantity): void
    {
        $this->newAvailableQuantity = $newAvailableQuantity;
    }

    /**
     * @param ?ChannelReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelReference $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }
}
