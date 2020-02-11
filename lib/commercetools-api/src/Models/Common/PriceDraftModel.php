<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class PriceDraftModel extends JsonObjectModel implements PriceDraft
{

    /**
     * @var ?Money
     */
    protected $value;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?CustomerGroupResourceIdentifier
     */
    protected $customerGroup;

    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $channel;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?PriceTierDraftCollection
     */
    protected $tiers;

    /**
     * @var ?DiscountedPrice
     */
    protected $discounted;


    public function __construct(
        Money $value = null,
        string $country = null,
        CustomerGroupResourceIdentifier $customerGroup = null,
        ChannelResourceIdentifier $channel = null,
        DateTimeImmutable $validFrom = null,
        DateTimeImmutable $validUntil = null,
        CustomFieldsDraft $custom = null,
        PriceTierDraftCollection $tiers = null,
        DiscountedPrice $discounted = null
    ) {
        $this->value = $value;
        $this->country = $country;
        $this->customerGroup = $customerGroup;
        $this->channel = $channel;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
        $this->custom = $custom;
        $this->tiers = $tiers;
        $this->discounted = $discounted;

    }

    /**
     * @return null|Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceDraft::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = MoneyModel::of($data);
        }

        return $this->value;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceDraft::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceDraft::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupResourceIdentifierModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceDraft::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->channel;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceDraft::FIELD_VALID_FROM);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validFrom = $data;
        }

        return $this->validFrom;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceDraft::FIELD_VALID_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validUntil = $data;
        }

        return $this->validUntil;
    }

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|PriceTierDraftCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(PriceDraft::FIELD_TIERS);
            if (is_null($data)) {
                return null;
            }
            $this->tiers = PriceTierDraftCollection::fromArray($data);
        }

        return $this->tiers;
    }

    /**
     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        if (is_null($this->discounted)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceDraft::FIELD_DISCOUNTED);
            if (is_null($data)) {
                return null;
            }

            $this->discounted = DiscountedPriceModel::of($data);
        }

        return $this->discounted;
    }

    public function setValue(?Money $value): void
    {
        $this->value = $value;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    public function setChannel(?ChannelResourceIdentifier $channel): void
    {
        $this->channel = $channel;
    }

    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setTiers(?PriceTierDraftCollection $tiers): void
    {
        $this->tiers = $tiers;
    }

    public function setDiscounted(?DiscountedPrice $discounted): void
    {
        $this->discounted = $discounted;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[PriceDraft::FIELD_VALID_FROM]) && $data[PriceDraft::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[PriceDraft::FIELD_VALID_FROM] = $data[PriceDraft::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[PriceDraft::FIELD_VALID_UNTIL]) && $data[PriceDraft::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[PriceDraft::FIELD_VALID_UNTIL] = $data[PriceDraft::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }

}
