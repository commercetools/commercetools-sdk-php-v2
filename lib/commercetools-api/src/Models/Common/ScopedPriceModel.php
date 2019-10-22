<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class ScopedPriceModel extends JsonObjectModel implements ScopedPrice
{
    /**
     * @var ?DiscountedPrice
     */
    protected $discounted;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?ChannelReference
     */
    protected $channel;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?TypedMoney
     */
    protected $value;

    /**
     * @var ?TypedMoney
     */
    protected $currentValue;

    public function __construct(
        DiscountedPrice $discounted = null,
        string $country = null,
        CustomerGroupReference $customerGroup = null,
        CustomFields $custom = null,
        ChannelReference $channel = null,
        DateTimeImmutable $validUntil = null,
        DateTimeImmutable $validFrom = null,
        string $id = null,
        TypedMoney $value = null,
        TypedMoney $currentValue = null
    ) {
        $this->discounted = $discounted;
        $this->country = $country;
        $this->customerGroup = $customerGroup;
        $this->custom = $custom;
        $this->channel = $channel;
        $this->validUntil = $validUntil;
        $this->validFrom = $validFrom;
        $this->id = $id;
        $this->value = $value;
        $this->currentValue = $currentValue;
    }

    /**
     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        if (is_null($this->discounted)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ScopedPrice::FIELD_DISCOUNTED);
            if (is_null($data)) {
                return null;
            }

            $this->discounted = DiscountedPriceModel::of($data);
        }

        return $this->discounted;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>.
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ScopedPrice::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ScopedPrice::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ScopedPrice::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|ChannelReference
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ScopedPrice::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ChannelReferenceModel::of($data);
        }

        return $this->channel;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ScopedPrice::FIELD_VALID_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validUntil = $data;
        }

        return $this->validUntil;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ScopedPrice::FIELD_VALID_FROM);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validFrom = $data;
        }

        return $this->validFrom;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ScopedPrice::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|TypedMoney
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ScopedPrice::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    /**
     * @return null|TypedMoney
     */
    public function getCurrentValue()
    {
        if (is_null($this->currentValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ScopedPrice::FIELD_CURRENT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->currentValue = $className::of($data);
        }

        return $this->currentValue;
    }

    public function setDiscounted(?DiscountedPrice $discounted): void
    {
        $this->discounted = $discounted;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    public function setChannel(?ChannelReference $channel): void
    {
        $this->channel = $channel;
    }

    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setValue(?TypedMoney $value): void
    {
        $this->value = $value;
    }

    public function setCurrentValue(?TypedMoney $currentValue): void
    {
        $this->currentValue = $currentValue;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ScopedPrice::FIELD_VALID_UNTIL]) && $data[ScopedPrice::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[ScopedPrice::FIELD_VALID_UNTIL] = $data[ScopedPrice::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ScopedPrice::FIELD_VALID_FROM]) && $data[ScopedPrice::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[ScopedPrice::FIELD_VALID_FROM] = $data[ScopedPrice::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
