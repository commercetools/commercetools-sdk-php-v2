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
use Commercetools\Types\Type\CustomFieldsDraft;

class PriceDraftModel extends JsonObjectModel implements PriceDraft
{
    /**
     * @var Money
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
     * @var CustomFieldsDraft
     */
    protected $custom;
    /**
     * @var PriceTierCollection
     */
    protected $tiers;

    /**
     * @return Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(PriceDraft::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

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
            $value = $this->raw(PriceDraft::FIELD_COUNTRY);
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
            $value = $this->raw(PriceDraft::FIELD_CUSTOMER_GROUP);
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
            $value = $this->raw(PriceDraft::FIELD_CHANNEL);
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
            $value = $this->raw(PriceDraft::FIELD_VALID_FROM);
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
            $value = $this->raw(PriceDraft::FIELD_VALID_UNTIL);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->validUntil = $value;
        }
        return $this->validUntil;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(PriceDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

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
            $value = $this->raw(PriceDraft::FIELD_TIERS);
            if (is_null($value)) {
                return $this->mapData(PriceTierCollection::class, null);
            }
            $value = $this->mapData(PriceTierCollection::class, $value);
            $this->tiers = $value;
        }
        return $this->tiers;
    }

    /**
     * @param Money $value
     * @return $this
     */
    public function setValue(Money $value)
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
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom)
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
        if (isset($data[PriceDraft::FIELD_VALID_FROM]) && $data[PriceDraft::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[PriceDraft::FIELD_VALID_FROM] = $data[PriceDraft::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[PriceDraft::FIELD_VALID_UNTIL]) && $data[PriceDraft::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[PriceDraft::FIELD_VALID_UNTIL] = $data[PriceDraft::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
