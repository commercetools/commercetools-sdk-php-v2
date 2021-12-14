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
 * @implements Builder<InventoryEntryQuantitySetMessagePayload>
 */
final class InventoryEntryQuantitySetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $oldQuantityOnStock;

    /**
     * @var ?int
     */
    private $newQuantityOnStock;

    /**
     * @var ?int
     */
    private $oldAvailableQuantity;

    /**
     * @var ?int
     */
    private $newAvailableQuantity;

    /**
     * @var null|ChannelReference|ChannelReferenceBuilder
     */
    private $supplyChannel;

    /**
     * @return null|int
     */
    public function getOldQuantityOnStock()
    {
        return $this->oldQuantityOnStock;
    }

    /**
     * @return null|int
     */
    public function getNewQuantityOnStock()
    {
        return $this->newQuantityOnStock;
    }

    /**
     * @return null|int
     */
    public function getOldAvailableQuantity()
    {
        return $this->oldAvailableQuantity;
    }

    /**
     * @return null|int
     */
    public function getNewAvailableQuantity()
    {
        return $this->newAvailableQuantity;
    }

    /**
     * @return null|ChannelReference
     */
    public function getSupplyChannel()
    {
        return $this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel;
    }

    /**
     * @param ?int $oldQuantityOnStock
     * @return $this
     */
    public function withOldQuantityOnStock(?int $oldQuantityOnStock)
    {
        $this->oldQuantityOnStock = $oldQuantityOnStock;

        return $this;
    }

    /**
     * @param ?int $newQuantityOnStock
     * @return $this
     */
    public function withNewQuantityOnStock(?int $newQuantityOnStock)
    {
        $this->newQuantityOnStock = $newQuantityOnStock;

        return $this;
    }

    /**
     * @param ?int $oldAvailableQuantity
     * @return $this
     */
    public function withOldAvailableQuantity(?int $oldAvailableQuantity)
    {
        $this->oldAvailableQuantity = $oldAvailableQuantity;

        return $this;
    }

    /**
     * @param ?int $newAvailableQuantity
     * @return $this
     */
    public function withNewAvailableQuantity(?int $newAvailableQuantity)
    {
        $this->newAvailableQuantity = $newAvailableQuantity;

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

    public function build(): InventoryEntryQuantitySetMessagePayload
    {
        return new InventoryEntryQuantitySetMessagePayloadModel(
            $this->oldQuantityOnStock,
            $this->newQuantityOnStock,
            $this->oldAvailableQuantity,
            $this->newAvailableQuantity,
            $this->supplyChannel instanceof ChannelReferenceBuilder ? $this->supplyChannel->build() : $this->supplyChannel
        );
    }

    public static function of(): InventoryEntryQuantitySetMessagePayloadBuilder
    {
        return new self();
    }
}
