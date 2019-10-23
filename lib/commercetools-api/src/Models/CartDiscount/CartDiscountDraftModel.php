<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class CartDiscountDraftModel extends JsonObjectModel implements CartDiscountDraft
{
    /**
     * @var ?bool
     */
    protected $requiresDiscountCode;

    /**
     * @var ?string
     */
    protected $cartPredicate;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $stackingMode;

    /**
     * @var ?string
     */
    protected $sortOrder;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @var ?bool
     */
    protected $isActive;

    /**
     * @var ?CartDiscountValueDraft
     */
    protected $value;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?CartDiscountTarget
     */
    protected $target;

    public function __construct(
        bool $requiresDiscountCode = null,
        string $cartPredicate = null,
        CustomFields $custom = null,
        string $stackingMode = null,
        string $sortOrder = null,
        LocalizedString $name = null,
        DateTimeImmutable $validUntil = null,
        LocalizedString $description = null,
        DateTimeImmutable $validFrom = null,
        bool $isActive = null,
        CartDiscountValueDraft $value = null,
        string $key = null,
        CartDiscountTarget $target = null
    ) {
        $this->requiresDiscountCode = $requiresDiscountCode;
        $this->cartPredicate = $cartPredicate;
        $this->custom = $custom;
        $this->stackingMode = $stackingMode;
        $this->sortOrder = $sortOrder;
        $this->name = $name;
        $this->validUntil = $validUntil;
        $this->description = $description;
        $this->validFrom = $validFrom;
        $this->isActive = $isActive;
        $this->value = $value;
        $this->key = $key;
        $this->target = $target;
    }

    /**
     * @return null|bool
     */
    public function getRequiresDiscountCode()
    {
        if (is_null($this->requiresDiscountCode)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(CartDiscountDraft::FIELD_REQUIRES_DISCOUNT_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->requiresDiscountCode = (bool) $data;
        }

        return $this->requiresDiscountCode;
    }

    /**
     * @return null|string
     */
    public function getCartPredicate()
    {
        if (is_null($this->cartPredicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountDraft::FIELD_CART_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->cartPredicate = (string) $data;
        }

        return $this->cartPredicate;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>Specifies whether the application of this discount causes the following discounts to be ignored.
     * Defaults to Stacking.</p>.
     *
     * @return null|string
     */
    public function getStackingMode()
    {
        if (is_null($this->stackingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountDraft::FIELD_STACKING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->stackingMode = (string) $data;
        }

        return $this->stackingMode;
    }

    /**
     * @return null|string
     */
    public function getSortOrder()
    {
        if (is_null($this->sortOrder)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountDraft::FIELD_SORT_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->sortOrder = (string) $data;
        }

        return $this->sortOrder;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountDraft::FIELD_VALID_UNTIL);
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
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountDraft::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountDraft::FIELD_VALID_FROM);
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
     * @return null|bool
     */
    public function getIsActive()
    {
        if (is_null($this->isActive)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(CartDiscountDraft::FIELD_IS_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->isActive = (bool) $data;
        }

        return $this->isActive;
    }

    /**
     * @return null|CartDiscountValueDraft
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountDraft::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountValueDraftModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountDraft::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountTargetModel::resolveDiscriminatorClass($data);
            $this->target = $className::of($data);
        }

        return $this->target;
    }

    public function setRequiresDiscountCode(?bool $requiresDiscountCode): void
    {
        $this->requiresDiscountCode = $requiresDiscountCode;
    }

    public function setCartPredicate(?string $cartPredicate): void
    {
        $this->cartPredicate = $cartPredicate;
    }

    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    public function setStackingMode(?string $stackingMode): void
    {
        $this->stackingMode = $stackingMode;
    }

    public function setSortOrder(?string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function setValue(?CartDiscountValueDraft $value): void
    {
        $this->value = $value;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setTarget(?CartDiscountTarget $target): void
    {
        $this->target = $target;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CartDiscountDraft::FIELD_VALID_UNTIL]) && $data[CartDiscountDraft::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[CartDiscountDraft::FIELD_VALID_UNTIL] = $data[CartDiscountDraft::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[CartDiscountDraft::FIELD_VALID_FROM]) && $data[CartDiscountDraft::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[CartDiscountDraft::FIELD_VALID_FROM] = $data[CartDiscountDraft::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
