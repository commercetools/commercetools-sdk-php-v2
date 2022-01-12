<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\ReferenceCollection;
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
final class CartDiscountModel extends JsonObjectModel implements CartDiscount
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?CartDiscountValue
     */
    protected $value;

    /**
     * @var ?string
     */
    protected $cartPredicate;

    /**
     * @var ?CartDiscountTarget
     */
    protected $target;

    /**
     * @var ?string
     */
    protected $sortOrder;

    /**
     * @var ?bool
     */
    protected $isActive;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @var ?bool
     */
    protected $requiresDiscountCode;

    /**
     * @var ?ReferenceCollection
     */
    protected $references;

    /**
     * @var ?string
     */
    protected $stackingMode;

    /**
     * @var ?CustomFields
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null,
        ?LocalizedString $name = null,
        ?string $key = null,
        ?LocalizedString $description = null,
        ?CartDiscountValue $value = null,
        ?string $cartPredicate = null,
        ?CartDiscountTarget $target = null,
        ?string $sortOrder = null,
        ?bool $isActive = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null,
        ?bool $requiresDiscountCode = null,
        ?ReferenceCollection $references = null,
        ?string $stackingMode = null,
        ?CustomFields $custom = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->name = $name;
        $this->key = $key;
        $this->description = $description;
        $this->value = $value;
        $this->cartPredicate = $cartPredicate;
        $this->target = $target;
        $this->sortOrder = $sortOrder;
        $this->isActive = $isActive;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
        $this->requiresDiscountCode = $requiresDiscountCode;
        $this->references = $references;
        $this->stackingMode = $stackingMode;
        $this->custom = $custom;
    }

    /**
     * <p>The unique ID of the cart discount.</p>
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
     * <p>The current version of the cart discount.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources updated after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
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
     * <p>User-specific unique identifier for a cart discount.
     * Must be unique across a project.</p>
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
     * @return null|CartDiscountValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = CartDiscountValueModel::of($data);
        }

        return $this->value;
    }

    /**
     * <p>A valid Cart predicate.</p>
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
     * <p>Empty when the <code>value</code> has type <code>giftLineItem</code>, otherwise a CartDiscountTarget is set.</p>
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

            $this->target = CartDiscountTargetModel::of($data);
        }

        return $this->target;
    }

    /**
     * <p>The string must contain a number between 0 and 1.
     * All matching cart discounts are applied to a cart in the order defined by this field.
     * A discount with greater sort order is prioritized higher than a discount with lower sort order.
     * The sort order is unambiguous among all cart discounts.</p>
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
     * <p>Only active discount can be applied to the cart.</p>
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
     * <p>States whether the discount can only be used in a connection with a DiscountCode.</p>
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
     * <p>The platform will generate this array from the predicate.
     * It contains the references of all the resources that are addressed in the predicate.</p>
     *
     * @return null|ReferenceCollection
     */
    public function getReferences()
    {
        if (is_null($this->references)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REFERENCES);
            if (is_null($data)) {
                return null;
            }
            $this->references = ReferenceCollection::fromArray($data);
        }

        return $this->references;
    }

    /**
     * <p>Specifies whether the application of this discount causes the following discounts to be ignored.
     * Defaults to Stacking.</p>
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
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
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
     * @param ?CartDiscountValue $value
     */
    public function setValue(?CartDiscountValue $value): void
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
     * @param ?ReferenceCollection $references
     */
    public function setReferences(?ReferenceCollection $references): void
    {
        $this->references = $references;
    }

    /**
     * @param ?string $stackingMode
     */
    public function setStackingMode(?string $stackingMode): void
    {
        $this->stackingMode = $stackingMode;
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
        if (isset($data[CartDiscount::FIELD_CREATED_AT]) && $data[CartDiscount::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[CartDiscount::FIELD_CREATED_AT] = $data[CartDiscount::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[CartDiscount::FIELD_LAST_MODIFIED_AT]) && $data[CartDiscount::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[CartDiscount::FIELD_LAST_MODIFIED_AT] = $data[CartDiscount::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[CartDiscount::FIELD_VALID_FROM]) && $data[CartDiscount::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[CartDiscount::FIELD_VALID_FROM] = $data[CartDiscount::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[CartDiscount::FIELD_VALID_UNTIL]) && $data[CartDiscount::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[CartDiscount::FIELD_VALID_UNTIL] = $data[CartDiscount::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
