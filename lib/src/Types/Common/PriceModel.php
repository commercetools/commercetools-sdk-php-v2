<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\CustomerGroup\CustomerGroupReference;
use Commercetools\Types\Type\CustomFields;

class PriceModel extends JsonObjectModel implements Price {
    /**
     * @var string
     */
    protected $id;
    /**
     * @var TypedMoney
     */
    protected $value;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var CustomerGroupReference
     */
    protected $customerGroup;
    /**
     * @var ChannelReference
     */
    protected $channel;
    /**
     * @var \DateTimeImmutable
     */
    protected $validFrom;
    /**
     * @var \DateTimeImmutable
     */
    protected $validUntil;
    /**
     * @var DiscountedPrice
     */
    protected $discounted;
    /**
     * @var CustomFields
     */
    protected $custom;
    /**
     * @var PriceTierCollection
     */
    protected $tiers;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(Price::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return TypedMoney
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Price::FIELD_VALUE);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->value = $value;
        }
        return $this->value;
    }
    /**
     * @return string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            $value = $this->raw(Price::FIELD_COUNTRY);
            $value = (string)$value;
            $this->country = $value;
        }
        return $this->country;
    }
    /**
     * @return CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            $value = $this->raw(Price::FIELD_CUSTOMER_GROUP);
            if (is_null($value)) {
                return $this->mapData(CustomerGroupReference::class, null);
            }
            $value = $this->mapData(CustomerGroupReference::class, $value);

            $this->customerGroup = $value;
        }
        return $this->customerGroup;
    }
    /**
     * @return ChannelReference
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            $value = $this->raw(Price::FIELD_CHANNEL);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->channel = $value;
        }
        return $this->channel;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            $value = $this->raw(Price::FIELD_VALID_FROM);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->validFrom = $value;
        }
        return $this->validFrom;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            $value = $this->raw(Price::FIELD_VALID_UNTIL);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->validUntil = $value;
        }
        return $this->validUntil;
    }
    /**
     * @return DiscountedPrice
     */
    public function getDiscounted()
    {
        if (is_null($this->discounted)) {
            $value = $this->raw(Price::FIELD_DISCOUNTED);
            if (is_null($value)) {
                return $this->mapData(DiscountedPrice::class, null);
            }
            $value = $this->mapData(DiscountedPrice::class, $value);

            $this->discounted = $value;
        }
        return $this->discounted;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(Price::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return PriceTierCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            $value = $this->raw(Price::FIELD_TIERS);
            if (is_null($value)) {
                return $this->mapData(PriceTierCollection::class, null);
            }
            $value = $this->mapData(PriceTierCollection::class, $value);
            $this->tiers = $value;
        }
        return $this->tiers;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

        return $this;
    }
    /**
     * @param TypedMoney $value
     * @return $this
     */
    public function setValue(TypedMoney $value)
    {
        $this->value = $value;

        return $this;
    }
    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->country = (string)$country;

        return $this;
    }
    /**
     * @param CustomerGroupReference $customerGroup
     * @return $this
     */
    public function setCustomerGroup(CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }
    /**
     * @param ChannelReference $channel
     * @return $this
     */
    public function setChannel(ChannelReference $channel)
    {
        $this->channel = $channel;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        if ($validFrom instanceof \DateTime) {
            $validFrom = \DateTimeImmutable::createFromMutable($validFrom);
        }
        if (!$validFrom instanceof \DateTimeImmutable) {
            $validFrom = new \DateTimeImmutable($validFrom);
        }
        $this->$validFrom = $validFrom;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        if ($validUntil instanceof \DateTime) {
            $validUntil = \DateTimeImmutable::createFromMutable($validUntil);
        }
        if (!$validUntil instanceof \DateTimeImmutable) {
            $validUntil = new \DateTimeImmutable($validUntil);
        }
        $this->$validUntil = $validUntil;

        return $this;
    }
    /**
     * @param DiscountedPrice $discounted
     * @return $this
     */
    public function setDiscounted(DiscountedPrice $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }
    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }
    /**
     * @param PriceTierCollection $tiers
     * @return $this
     */
    public function setTiers(PriceTierCollection $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[Price::FIELD_VALID_FROM]) && $data[Price::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[Price::FIELD_VALID_FROM] = $data[Price::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[Price::FIELD_VALID_UNTIL]) && $data[Price::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[Price::FIELD_VALID_UNTIL] = $data[Price::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
