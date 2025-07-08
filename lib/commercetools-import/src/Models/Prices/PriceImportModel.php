<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ChannelKeyReferenceModel;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReferenceModel;
use Commercetools\Import\Models\Common\DiscountedPrice;
use Commercetools\Import\Models\Common\DiscountedPriceModel;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceModel;
use Commercetools\Import\Models\Common\PriceTierCollection;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceModel;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;
use Commercetools\Import\Models\Common\ProductVariantKeyReferenceModel;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Common\TypedMoneyModel;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomModel;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class PriceImportModel extends JsonObjectModel implements PriceImport
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?TypedMoney
     */
    protected $value;

    /**
     *
     * @var ?string
     */
    protected $country;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     *
     * @var ?CustomerGroupKeyReference
     */
    protected $customerGroup;

    /**
     *
     * @var ?ChannelKeyReference
     */
    protected $channel;

    /**
     *
     * @var ?DiscountedPrice
     */
    protected $discounted;

    /**
     *
     * @var ?bool
     */
    protected $staged;

    /**
     *
     * @var ?PriceTierCollection
     */
    protected $tiers;

    /**
     *
     * @var ?Custom
     */
    protected $custom;

    /**
     *
     * @var ?ProductVariantKeyReference
     */
    protected $productVariant;

    /**
     *
     * @var ?ProductKeyReference
     */
    protected $product;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?TypedMoney $value = null,
        ?string $country = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null,
        ?CustomerGroupKeyReference $customerGroup = null,
        ?ChannelKeyReference $channel = null,
        ?DiscountedPrice $discounted = null,
        ?bool $staged = null,
        ?PriceTierCollection $tiers = null,
        ?Custom $custom = null,
        ?ProductVariantKeyReference $productVariant = null,
        ?ProductKeyReference $product = null
    ) {
        $this->key = $key;
        $this->value = $value;
        $this->country = $country;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
        $this->customerGroup = $customerGroup;
        $this->channel = $channel;
        $this->discounted = $discounted;
        $this->staged = $staged;
        $this->tiers = $tiers;
        $this->custom = $custom;
        $this->productVariant = $productVariant;
        $this->product = $product;
    }

    /**
     * <p>User-defined unique identifier for the Embedded Price. If a <a href="/../api/types#price">Price</a> with this <code>key</code> exists on the specified <code>productVariant</code>, it is updated with the imported data.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Maps to <code>Price.value</code>.</p>
     *
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
     * <p>Maps to <code>Price.county</code>.</p>
     *
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
     * <p>Maps to <code>Price.validFrom</code>.</p>
     *
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
     * <p>Maps to <code>Price.validUntil</code>.</p>
     *
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
     * <p>Maps to <code>Price.customerGroup</code>. If the referenced <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced CustomerGroup is created.</p>
     *
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupKeyReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * <p>Maps to <code>Price.channel</code>. If the referenced <a href="ctp:api:type:Channel">Channel</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Channel is created.</p>
     *
     *
     * @return null|ChannelKeyReference
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel = ChannelKeyReferenceModel::of($data);
        }

        return $this->channel;
    }

    /**
     * <p>Sets a discounted price from an external service.</p>
     *
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
     * <ul>
     * <li>Set to <code>false</code> to update both the <a href="/../api/projects/productProjections#current--staged">current and staged projections</a> of the <a href="ctp:api:type:Product">Product</a> with the new Price data.</li>
     * <li>Leave empty or set to <code>true</code> to only update the staged projection.</li>
     * </ul>
     *
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>The tiered prices for this price.</p>
     *
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
     * <p>Maps to <code>Price.custom</code>.</p>
     *
     *
     * @return null|Custom
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>The <a href="ctp:api:type:ProductVariant">ProductVariant</a> which contains this Embedded Price. If the referenced ProductVariant does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced ProductVariant is created.</p>
     *
     *
     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant()
    {
        if (is_null($this->productVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->productVariant = ProductVariantKeyReferenceModel::of($data);
        }

        return $this->productVariant;
    }

    /**
     * <p>The <a href="ctp:api:type:Product">Product</a> which contains the <code>productVariant</code>. If the referenced Product does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Product is created.</p>
     *
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductKeyReferenceModel::of($data);
        }

        return $this->product;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
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
     * @param ?CustomerGroupKeyReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @param ?ChannelKeyReference $channel
     */
    public function setChannel(?ChannelKeyReference $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @param ?DiscountedPrice $discounted
     */
    public function setDiscounted(?DiscountedPrice $discounted): void
    {
        $this->discounted = $discounted;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?PriceTierCollection $tiers
     */
    public function setTiers(?PriceTierCollection $tiers): void
    {
        $this->tiers = $tiers;
    }

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?ProductVariantKeyReference $productVariant
     */
    public function setProductVariant(?ProductVariantKeyReference $productVariant): void
    {
        $this->productVariant = $productVariant;
    }

    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void
    {
        $this->product = $product;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[PriceImport::FIELD_VALID_FROM]) && $data[PriceImport::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[PriceImport::FIELD_VALID_FROM] = $data[PriceImport::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[PriceImport::FIELD_VALID_UNTIL]) && $data[PriceImport::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[PriceImport::FIELD_VALID_UNTIL] = $data[PriceImport::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
