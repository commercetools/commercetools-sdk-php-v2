<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<ProductDiscountDraft>
 */
final class ProductDiscountDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $predicate;

    /**
     * @var ?string
     */
    private $sortOrder;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $name;

    /**
     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $description;

    /**
     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**
     * @var ?bool
     */
    private $isActive;

    /**
     * @var ProductDiscountValueDraft|?ProductDiscountValueDraftBuilder
     */
    private $value;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * @return null|string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @return null|bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @return null|ProductDiscountValueDraft
     */
    public function getValue()
    {
        return $this->value instanceof ProductDiscountValueDraftBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSortOrder(?string $sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIsActive(?bool $isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?ProductDiscountValueDraft $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?ProductDiscountValueDraftBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): ProductDiscountDraft
    {
        return new ProductDiscountDraftModel(
            $this->predicate,
            $this->sortOrder,
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->validUntil,
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            $this->validFrom,
            $this->isActive,
            ($this->value instanceof ProductDiscountValueDraftBuilder ? $this->value->build() : $this->value),
            $this->key
        );
    }

    public static function of(): ProductDiscountDraftBuilder
    {
        return new self();
    }
}
