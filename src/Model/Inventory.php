<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Inventory extends Resource {
    protected $sku;
    protected $supplyChannel;
    protected $quantityOnStock;
    protected $availableQuantity;
    protected $restockableInDays;
    protected $expectedDelivery;
    protected $custom;

    /**
     * @return string
     */
    public function getSku(): string
    {
        if (is_null($this->sku)) {
            $value = $this->raw('sku');
            if (!is_null($value)) {
                $this->sku = (string)$value;
            } else {
                return '';
            }
        }
        return $this->sku;
    }
                

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel(): ChannelReference
    {
        if (is_null($this->supplyChannel)) {
            $value = $this->raw('supplyChannel');
            if (!is_null($value)) {
                $this->supplyChannel = Mapper::map($value, ChannelReference::class);
            } else {
                return Mapper::map([], ChannelReference::class);
            }
        }
        return $this->supplyChannel;
    }
                

    /**
     * @return int
     */
    public function getQuantityOnStock(): int
    {
        if (is_null($this->quantityOnStock)) {
            $value = $this->raw('quantityOnStock');
            if (!is_null($value)) {
                $this->quantityOnStock = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->quantityOnStock;
    }
                

    /**
     * @return int
     */
    public function getAvailableQuantity(): int
    {
        if (is_null($this->availableQuantity)) {
            $value = $this->raw('availableQuantity');
            if (!is_null($value)) {
                $this->availableQuantity = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->availableQuantity;
    }
                

    /**
     * @return int
     */
    public function getRestockableInDays(): int
    {
        if (is_null($this->restockableInDays)) {
            $value = $this->raw('restockableInDays');
            if (!is_null($value)) {
                $this->restockableInDays = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->restockableInDays;
    }
                

    /**
     * @return \DateTimeImmutable
     */
    public function getExpectedDelivery(): \DateTimeImmutable
    {
        if (is_null($this->expectedDelivery)) {
            $value = $this->raw('expectedDelivery');
            if (!is_null($value)) {
                $this->expectedDelivery = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->expectedDelivery;
    }
                

    /**
     * @return CustomFields
     */
    public function getCustom(): CustomFields
    {
        if (is_null($this->custom)) {
            $value = $this->raw('custom');
            if (!is_null($value)) {
                $this->custom = Mapper::map($value, CustomFields::class);
            } else {
                return Mapper::map([], CustomFields::class);
            }
        }
        return $this->custom;
    }
                
}
