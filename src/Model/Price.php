<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Price extends JsonObject {
    protected $id;
    protected $value;
    protected $country;
    protected $customerGroup;
    protected $channel;
    protected $validFrom;
    protected $validUntil;
    protected $discounted;
    protected $custom;

    /**
     * @return string
     */
    public function getId(): string
    {
        if (is_null($this->id)) {
            $value = $this->raw('id');
            if (!is_null($value)) {
                $this->id = (string)$value;
            } else {
                return '';
            }
        }
        return $this->id;
    }
                

    /**
     * @return Money
     */
    public function getValue(): Money
    {
        if (is_null($this->value)) {
            $value = $this->raw('value');
            if (!is_null($value)) {
                $this->value = Mapper::map($value, Money::class);
            } else {
                return Mapper::map([], Money::class);
            }
        }
        return $this->value;
    }
                

    /**
     * @return string
     */
    public function getCountry(): string
    {
        if (is_null($this->country)) {
            $value = $this->raw('country');
            if (!is_null($value)) {
                $this->country = (string)$value;
            } else {
                return '';
            }
        }
        return $this->country;
    }
                

    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup(): CustomerGroupReference
    {
        if (is_null($this->customerGroup)) {
            $value = $this->raw('customerGroup');
            if (!is_null($value)) {
                $this->customerGroup = Mapper::map($value, CustomerGroupReference::class);
            } else {
                return Mapper::map([], CustomerGroupReference::class);
            }
        }
        return $this->customerGroup;
    }
                

    /**
     * @return ChannelReference
     */
    public function getChannel(): ChannelReference
    {
        if (is_null($this->channel)) {
            $value = $this->raw('channel');
            if (!is_null($value)) {
                $this->channel = Mapper::map($value, ChannelReference::class);
            } else {
                return Mapper::map([], ChannelReference::class);
            }
        }
        return $this->channel;
    }
                

    /**
     * @return \DateTimeImmutable
     */
    public function getValidFrom(): \DateTimeImmutable
    {
        if (is_null($this->validFrom)) {
            $value = $this->raw('validFrom');
            if (!is_null($value)) {
                $this->validFrom = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->validFrom;
    }
                

    /**
     * @return \DateTimeImmutable
     */
    public function getValidUntil(): \DateTimeImmutable
    {
        if (is_null($this->validUntil)) {
            $value = $this->raw('validUntil');
            if (!is_null($value)) {
                $this->validUntil = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->validUntil;
    }
                

    /**
     * @return DiscountedPrice
     */
    public function getDiscounted(): DiscountedPrice
    {
        if (is_null($this->discounted)) {
            $value = $this->raw('discounted');
            if (!is_null($value)) {
                $this->discounted = Mapper::map($value, DiscountedPrice::class);
            } else {
                return Mapper::map([], DiscountedPrice::class);
            }
        }
        return $this->discounted;
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
