<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<CartDiscountDraft>
 */
final class CartDiscountDraftBuilder implements Builder
{
    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**

     * @var null|CartDiscountValueDraft|CartDiscountValueDraftBuilder
     */
    private $value;

    /**

     * @var ?string
     */
    private $cartPredicate;

    /**

     * @var null|CartDiscountTarget|CartDiscountTargetBuilder
     */
    private $target;

    /**

     * @var ?string
     */
    private $sortOrder;

    /**

     * @var ?StoreResourceIdentifierCollection
     */
    private $stores;

    /**

     * @var ?bool
     */
    private $isActive;

    /**

     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**

     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**

     * @var ?bool
     */
    private $requiresDiscountCode;

    /**

     * @var ?string
     */
    private $stackingMode;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>Name of the CartDiscount.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>User-defined unique identifier for the CartDiscount.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Description of the CartDiscount.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>Effect of the CartDiscount on the <code>target</code>.</p>
     *

     * @return null|CartDiscountValueDraft
     */
    public function getValue()
    {
        return $this->value instanceof CartDiscountValueDraftBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>Valid <a href="/../api/projects/predicates#cart-predicates">Cart Predicate</a>.</p>
     *

     * @return null|string
     */
    public function getCartPredicate()
    {
        return $this->cartPredicate;
    }

    /**
     * <p>Segment of the Cart that will be discounted.</p>
     * <p>Must not be set if the <code>value</code> is <code>giftLineItem</code>.</p>
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        return $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target;
    }

    /**
     * <p>Value between <code>0</code> and <code>1</code>.
     * A Discount with a higher sortOrder is prioritized.
     * The sort order must be unambiguous among all CartDiscounts.</p>
     *

     * @return null|string
     */
    public function getSortOrder()
    {
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

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * <p>Only active Discounts can be applied to the Cart.
     * If the <a href="/../api/limits#cart-discounts">limit</a> for active Cart Discounts is reached, a <a href="ctp:api:type:MaxCartDiscountsReachedError">MaxCartDiscountsReached</a> error is returned.</p>
     *

     * @return null|bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * <p>Date and time (UTC) from which the Discount is effective.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Date and time (UTC) until which the Discount is effective.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>States whether the Discount can only be used in a connection with a <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     *

     * @return null|bool
     */
    public function getRequiresDiscountCode()
    {
        return $this->requiresDiscountCode;
    }

    /**
     * <p>Specifies whether the application of this discount causes the following discounts to be ignored.</p>
     *

     * @return null|string
     */
    public function getStackingMode()
    {
        return $this->stackingMode;
    }

    /**
     * <p>Custom Fields of the CartDiscount.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?LocalizedString $description
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?CartDiscountValueDraft $value
     * @return $this
     */
    public function withValue(?CartDiscountValueDraft $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?string $cartPredicate
     * @return $this
     */
    public function withCartPredicate(?string $cartPredicate)
    {
        $this->cartPredicate = $cartPredicate;

        return $this;
    }

    /**
     * @param ?CartDiscountTarget $target
     * @return $this
     */
    public function withTarget(?CartDiscountTarget $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @param ?string $sortOrder
     * @return $this
     */
    public function withSortOrder(?string $sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     * @return $this
     */
    public function withStores(?StoreResourceIdentifierCollection $stores)
    {
        $this->stores = $stores;

        return $this;
    }

    /**
     * @param ?bool $isActive
     * @return $this
     */
    public function withIsActive(?bool $isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @param ?bool $requiresDiscountCode
     * @return $this
     */
    public function withRequiresDiscountCode(?bool $requiresDiscountCode)
    {
        $this->requiresDiscountCode = $requiresDiscountCode;

        return $this;
    }

    /**
     * @param ?string $stackingMode
     * @return $this
     */
    public function withStackingMode(?string $stackingMode)
    {
        $this->stackingMode = $stackingMode;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withDescription() instead
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?CartDiscountValueDraftBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withTarget() instead
     * @return $this
     */
    public function withTargetBuilder(?CartDiscountTargetBuilder $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): CartDiscountDraft
    {
        return new CartDiscountDraftModel(
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->key,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->value instanceof CartDiscountValueDraftBuilder ? $this->value->build() : $this->value,
            $this->cartPredicate,
            $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target,
            $this->sortOrder,
            $this->stores,
            $this->isActive,
            $this->validFrom,
            $this->validUntil,
            $this->requiresDiscountCode,
            $this->stackingMode,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): CartDiscountDraftBuilder
    {
        return new self();
    }
}
