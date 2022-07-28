<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceModel;
use Commercetools\Api\Models\Common\PriceTierCollection;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class EmbeddedPriceModel extends JsonObjectModel implements EmbeddedPrice
{
    /**

     * @var ?string
     */
    protected $id;

    /**

     * @var ?TypedMoney
     */
    protected $value;

    /**

     * @var ?string
     */
    protected $country;

    /**

     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    /**

     * @var ?ChannelReference
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

     * @var ?PriceTierCollection
     */
    protected $tiers;

    /**

     * @var ?DiscountedPrice
     */
    protected $discounted;

    /**

     * @var ?CustomFields
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?TypedMoney $value = null,
        ?string $country = null,
        ?CustomerGroupReference $customerGroup = null,
        ?ChannelReference $channel = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null,
        ?PriceTierCollection $tiers = null,
        ?DiscountedPrice $discounted = null,
        ?CustomFields $custom = null
    ) {
        $this->id = $id;
        $this->value = $value;
        $this->country = $country;
        $this->customerGroup = $customerGroup;
        $this->channel = $channel;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
        $this->tiers = $tiers;
        $this->discounted = $discounted;
        $this->custom = $custom;
    }

    /**
     * <p>Unique identifier of the EmbeddedPrice.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Money value of the EmbeddedPrice.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    /**
     * <p>Country for which the EmbeddedPrice is valid.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the EmbeddedPrice is valid.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p>Product distribution <a href="ctp:api:type:Channel">Channel</a> for which the EmbeddedPrice is valid.</p>
     *

     * @return null|ChannelReference
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ChannelReferenceModel::of($data);
        }

        return $this->channel;
    }

    /**
     * <p>Date from which the EmbeddedPrice is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_FROM);
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
     * <p>Date until the EmbeddedPrice is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_UNTIL);
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
     * <p>Price tiers if any are defined.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TIERS);
            if (is_null($data)) {
                return null;
            }
            $this->tiers = PriceTierCollection::fromArray($data);
        }

        return $this->tiers;
    }

    /**
     * <p>Set if a matching <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> exists.
     * If set, the API uses the <code>discounted</code> value for the <a href="ctp:api:type:CartLineItemPriceSelection">LineItem Price selection</a>.
     * When a <a href="ctp:api:type:ProductDiscountValueRelative">relative Discount</a> is applied and the fraction part of the <code>discounted</code> price is 0.5,
     * the discounted Price is rounded in favor of the customer with the <a href="https://en.wikipedia.org/wiki/Rounding#Round_half_down">half down rounding</a>.</p>
     * <p>The service will unset or replace the value</p>
     * <ul>
     * <li>once a matching relative or absolute Product Discount with a higher <code>sortOrder</code> exists,</li>
     * <li>if the referenced external Product Discount is deactivated, or</li>
     * <li>if the Product changes and the external Product Discount predicate does not match the discounted Price any more.</li>
     * </ul>
     *

     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        if (is_null($this->discounted)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED);
            if (is_null($data)) {
                return null;
            }

            $this->discounted = DiscountedPriceModel::of($data);
        }

        return $this->discounted;
    }

    /**
     * <p>Custom Fields for the EmbeddedPrice.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @param ?ChannelReference $channel
     */
    public function setChannel(?ChannelReference $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    /**
     * @param ?PriceTierCollection $tiers
     */
    public function setTiers(?PriceTierCollection $tiers): void
    {
        $this->tiers = $tiers;
    }

    /**
     * @param ?DiscountedPrice $discounted
     */
    public function setDiscounted(?DiscountedPrice $discounted): void
    {
        $this->discounted = $discounted;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[EmbeddedPrice::FIELD_VALID_FROM]) && $data[EmbeddedPrice::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[EmbeddedPrice::FIELD_VALID_FROM] = $data[EmbeddedPrice::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[EmbeddedPrice::FIELD_VALID_UNTIL]) && $data[EmbeddedPrice::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[EmbeddedPrice::FIELD_VALID_UNTIL] = $data[EmbeddedPrice::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
