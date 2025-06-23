<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\DiscountGroup\DiscountGroupResourceIdentifier;
use Commercetools\Api\Models\DiscountGroup\DiscountGroupResourceIdentifierModel;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CartDiscountDraftModel extends JsonObjectModel implements CartDiscountDraft
{
    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?LocalizedString
     */
    protected $description;

    /**
     *
     * @var ?CartDiscountValueDraft
     */
    protected $value;

    /**
     *
     * @var ?string
     */
    protected $cartPredicate;

    /**
     *
     * @var ?CartDiscountTarget
     */
    protected $target;

    /**
     *
     * @var ?string
     */
    protected $sortOrder;

    /**
     *
     * @var ?StoreResourceIdentifierCollection
     */
    protected $stores;

    /**
     *
     * @var ?bool
     */
    protected $isActive;

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
     * @var ?bool
     */
    protected $requiresDiscountCode;

    /**
     *
     * @var ?string
     */
    protected $stackingMode;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     *
     * @var ?DiscountGroupResourceIdentifier
     */
    protected $discountGroup;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $name = null,
        ?string $key = null,
        ?LocalizedString $description = null,
        ?CartDiscountValueDraft $value = null,
        ?string $cartPredicate = null,
        ?CartDiscountTarget $target = null,
        ?string $sortOrder = null,
        ?StoreResourceIdentifierCollection $stores = null,
        ?bool $isActive = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null,
        ?bool $requiresDiscountCode = null,
        ?string $stackingMode = null,
        ?CustomFieldsDraft $custom = null,
        ?DiscountGroupResourceIdentifier $discountGroup = null
    ) {
        $this->name = $name;
        $this->key = $key;
        $this->description = $description;
        $this->value = $value;
        $this->cartPredicate = $cartPredicate;
        $this->target = $target;
        $this->sortOrder = $sortOrder;
        $this->stores = $stores;
        $this->isActive = $isActive;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
        $this->requiresDiscountCode = $requiresDiscountCode;
        $this->stackingMode = $stackingMode;
        $this->custom = $custom;
        $this->discountGroup = $discountGroup;
    }

    /**
     * <p>Name of the CartDiscount.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>User-defined unique identifier for the CartDiscount.</p>
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
     * <p>Description of the CartDiscount.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p>Effect of the CartDiscount on the <code>target</code>.</p>
     *
     *
     * @return null|CartDiscountValueDraft
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountValueDraftModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    /**
     * <p>Valid <a href="/../api/projects/predicates#cart-predicates">Cart Predicate</a>.</p>
     *
     *
     * @return null|string
     */
    public function getCartPredicate()
    {
        if (is_null($this->cartPredicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CART_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->cartPredicate = (string) $data;
        }

        return $this->cartPredicate;
    }

    /**
     * <p>Segment of the Cart that will be discounted.</p>
     * <p>Must not be set if the <code>value</code> is <code>giftLineItem</code>.</p>
     *
     *
     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountTargetModel::resolveDiscriminatorClass($data);
            $this->target = $className::of($data);
        }

        return $this->target;
    }

    /**
     * <p>Value between <code>0</code> and <code>1</code> that determines the order in which the CartDiscounts will be applied; a CartDiscount with a higher value will be prioritized.</p>
     * <p>It must be unique among all CartDiscounts and DiscountGroups.</p>
     * <p>If the CartDiscount is part of a DiscountGroup, it will use the sort order of the DiscountGroup.</p>
     *
     *
     * @return null|string
     */
    public function getSortOrder()
    {
        if (is_null($this->sortOrder)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SORT_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->sortOrder = (string) $data;
        }

        return $this->sortOrder;
    }

    /**
     * <ul>
     * <li>If defined, the Cart Discount applies on <a href="ctp:api:type:Cart">Carts</a> having a <a href="ctp:api:type:Store">Store</a> matching any Store defined for this field.</li>
     * <li>If not defined, the Cart Discount applies on all Carts, irrespective of a Store.</li>
     * </ul>
     * <p>If the referenced Stores exceed the <a href="/../api/limits#cart-discounts-stores">limit</a>, a <a href="ctp:api:type:MaxStoreReferencesReachedError">MaxStoreReferencesReached</a> error is returned.</p>
     * <p>If the referenced Stores exceed the <a href="/../api/limits#cart-discounts">limit</a> for Cart Discounts that do not require a Discount Code, a <a href="ctp:api:type:StoreCartDiscountsLimitReachedError">StoreCartDiscountsLimitReached</a> error is returned.</p>
     *
     *
     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        if (is_null($this->stores)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->stores = StoreResourceIdentifierCollection::fromArray($data);
        }

        return $this->stores;
    }

    /**
     * <p>Only active Discounts can be applied to the Cart.
     * If the <a href="/../api/limits#cart-discounts">limit</a> for active Cart Discounts is reached, a <a href="ctp:api:type:MaxCartDiscountsReachedError">MaxCartDiscountsReached</a> error is returned.</p>
     *
     *
     * @return null|bool
     */
    public function getIsActive()
    {
        if (is_null($this->isActive)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->isActive = (bool) $data;
        }

        return $this->isActive;
    }

    /**
     * <p>Date and time (UTC) from which the Discount is effective.</p>
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
     * <p>Date and time (UTC) until which the Discount is effective.</p>
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
     * <p>States whether the Discount can only be used in a connection with a <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     *
     *
     * @return null|bool
     */
    public function getRequiresDiscountCode()
    {
        if (is_null($this->requiresDiscountCode)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_REQUIRES_DISCOUNT_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->requiresDiscountCode = (bool) $data;
        }

        return $this->requiresDiscountCode;
    }

    /**
     * <p>Specifies whether the application of this discount causes the following discounts to be ignored.</p>
     *
     *
     * @return null|string
     */
    public function getStackingMode()
    {
        if (is_null($this->stackingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STACKING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->stackingMode = (string) $data;
        }

        return $this->stackingMode;
    }

    /**
     * <p>Custom Fields of the CartDiscount.</p>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>Reference to a DiscountGroup that the CartDiscount must belong to.</p>
     *
     *
     * @return null|DiscountGroupResourceIdentifier
     */
    public function getDiscountGroup()
    {
        if (is_null($this->discountGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->discountGroup = DiscountGroupResourceIdentifierModel::of($data);
        }

        return $this->discountGroup;
    }


    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?CartDiscountValueDraft $value
     */
    public function setValue(?CartDiscountValueDraft $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?string $cartPredicate
     */
    public function setCartPredicate(?string $cartPredicate): void
    {
        $this->cartPredicate = $cartPredicate;
    }

    /**
     * @param ?CartDiscountTarget $target
     */
    public function setTarget(?CartDiscountTarget $target): void
    {
        $this->target = $target;
    }

    /**
     * @param ?string $sortOrder
     */
    public function setSortOrder(?string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void
    {
        $this->stores = $stores;
    }

    /**
     * @param ?bool $isActive
     */
    public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
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
     * @param ?bool $requiresDiscountCode
     */
    public function setRequiresDiscountCode(?bool $requiresDiscountCode): void
    {
        $this->requiresDiscountCode = $requiresDiscountCode;
    }

    /**
     * @param ?string $stackingMode
     */
    public function setStackingMode(?string $stackingMode): void
    {
        $this->stackingMode = $stackingMode;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?DiscountGroupResourceIdentifier $discountGroup
     */
    public function setDiscountGroup(?DiscountGroupResourceIdentifier $discountGroup): void
    {
        $this->discountGroup = $discountGroup;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CartDiscountDraft::FIELD_VALID_FROM]) && $data[CartDiscountDraft::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[CartDiscountDraft::FIELD_VALID_FROM] = $data[CartDiscountDraft::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[CartDiscountDraft::FIELD_VALID_UNTIL]) && $data[CartDiscountDraft::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[CartDiscountDraft::FIELD_VALID_UNTIL] = $data[CartDiscountDraft::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
