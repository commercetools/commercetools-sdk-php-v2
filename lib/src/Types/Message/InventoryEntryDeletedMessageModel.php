<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Channel\ChannelReference;

class InventoryEntryDeletedMessageModel extends MessageModel implements InventoryEntryDeletedMessage
{
    const DISCRIMINATOR_VALUE = 'InventoryEntryDeleted';

    /**
     * @var string
     */
    protected $sku;
    /**
     * @var ChannelReference
     */
    protected $supplyChannel;

    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(InventoryEntryDeletedMessage::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return ChannelReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            $value = $this->raw(InventoryEntryDeletedMessage::FIELD_SUPPLY_CHANNEL);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->supplyChannel = $value;
        }
        return $this->supplyChannel;
    }

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku)
    {
        $this->sku = (string)$sku;

        return $this;
    }
    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }

}
