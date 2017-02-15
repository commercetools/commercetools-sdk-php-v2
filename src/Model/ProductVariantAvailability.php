<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductVariantAvailability extends JsonObject {
    protected $isOnStock;
    protected $restockableInDays;
    protected $availableQuantity;
    protected $channels;

    /**
     * @return bool
     */
    public function getIsOnStock(): bool
    {
        if (is_null($this->isOnStock)) {
            $value = $this->raw('isOnStock');
            if (!is_null($value)) {
                $this->isOnStock = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->isOnStock;
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
     * @return ProductVariantAvailabilityCollection
     */
    public function getChannels(): ProductVariantAvailabilityCollection
    {
        if (is_null($this->channels)) {
            $value = $this->raw('channels');
            if (!is_null($value)) {
                $this->channels = Mapper::map($value, ProductVariantAvailabilityCollection::class);
            } else {
                return Mapper::map([], ProductVariantAvailabilityCollection::class);
            }
        }
        return $this->channels;
    }
                
}
