<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
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
final class DiscountCodeModel extends JsonObjectModel implements DiscountCode
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
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?CartDiscountReferenceCollection
     */
    protected $cartDiscounts;

    /**
     * @var ?string
     */
    protected $cartPredicate;

    /**
     * @var ?bool
     */
    protected $isActive;

    /**
     * @var ?ReferenceCollection
     */
    protected $references;

    /**
     * @var ?int
     */
    protected $maxApplications;

    /**
     * @var ?int
     */
    protected $maxApplicationsPerCustomer;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?array
     */
    protected $groups;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @var ?int
     */
    protected $applicationVersion;


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
        ?LocalizedString $description = null,
        ?string $code = null,
        ?CartDiscountReferenceCollection $cartDiscounts = null,
        ?string $cartPredicate = null,
        ?bool $isActive = null,
        ?ReferenceCollection $references = null,
        ?int $maxApplications = null,
        ?int $maxApplicationsPerCustomer = null,
        ?CustomFields $custom = null,
        ?array $groups = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null,
        ?int $applicationVersion = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->name = $name;
        $this->description = $description;
        $this->code = $code;
        $this->cartDiscounts = $cartDiscounts;
        $this->cartPredicate = $cartPredicate;
        $this->isActive = $isActive;
        $this->references = $references;
        $this->maxApplications = $maxApplications;
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
        $this->custom = $custom;
        $this->groups = $groups;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
        $this->applicationVersion = $applicationVersion;
    }

    /**
     * <p>The unique ID of the discount code.</p>
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
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
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
     * <p>Unique identifier of this discount code.
     * This value is added to the cart
     * to enable the related cart discounts in the cart.</p>
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>The referenced matching cart discounts can be applied to the cart once the DiscountCode is added.</p>
     *
     * @return null|CartDiscountReferenceCollection
     */
    public function getCartDiscounts()
    {
        if (is_null($this->cartDiscounts)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CART_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->cartDiscounts = CartDiscountReferenceCollection::fromArray($data);
        }

        return $this->cartDiscounts;
    }

    /**
     * <p>The discount code can only be applied to carts that match this predicate.</p>
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
     * <p>The platform will generate this array from the cart predicate.
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
     * <p>The discount code can only be applied <code>maxApplications</code> times.</p>
     *
     * @return null|int
     */
    public function getMaxApplications()
    {
        if (is_null($this->maxApplications)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MAX_APPLICATIONS);
            if (is_null($data)) {
                return null;
            }
            $this->maxApplications = (int) $data;
        }

        return $this->maxApplications;
    }

    /**
     * <p>The discount code can only be applied <code>maxApplicationsPerCustomer</code> times per customer.</p>
     *
     * @return null|int
     */
    public function getMaxApplicationsPerCustomer()
    {
        if (is_null($this->maxApplicationsPerCustomer)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MAX_APPLICATIONS_PER_CUSTOMER);
            if (is_null($data)) {
                return null;
            }
            $this->maxApplicationsPerCustomer = (int) $data;
        }

        return $this->maxApplicationsPerCustomer;
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
     * <p>The groups to which this discount code belong.</p>
     *
     * @return null|array
     */
    public function getGroups()
    {
        if (is_null($this->groups)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_GROUPS);
            if (is_null($data)) {
                return null;
            }
            $this->groups = $data;
        }

        return $this->groups;
    }

    /**
     * <p>The time from which the discount can be applied on a cart.
     * Before that time the code is invalid.</p>
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
     * <p>The time until the discount can be applied on a cart.
     * After that time the code is invalid.</p>
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
     * <p>Used for the internal platform only and registers the reservation of use of a discount code.
     * Its value is managed by the platform.
     * It can change at any time due to internal and external factors.
     * It should not be used in customer logic.</p>
     *
     * @return null|int
     */
    public function getApplicationVersion()
    {
        if (is_null($this->applicationVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_APPLICATION_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->applicationVersion = (int) $data;
        }

        return $this->applicationVersion;
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
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?string $code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * @param ?CartDiscountReferenceCollection $cartDiscounts
     */
    public function setCartDiscounts(?CartDiscountReferenceCollection $cartDiscounts): void
    {
        $this->cartDiscounts = $cartDiscounts;
    }

    /**
     * @param ?string $cartPredicate
     */
    public function setCartPredicate(?string $cartPredicate): void
    {
        $this->cartPredicate = $cartPredicate;
    }

    /**
     * @param ?bool $isActive
     */
    public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @param ?ReferenceCollection $references
     */
    public function setReferences(?ReferenceCollection $references): void
    {
        $this->references = $references;
    }

    /**
     * @param ?int $maxApplications
     */
    public function setMaxApplications(?int $maxApplications): void
    {
        $this->maxApplications = $maxApplications;
    }

    /**
     * @param ?int $maxApplicationsPerCustomer
     */
    public function setMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer): void
    {
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?array $groups
     */
    public function setGroups(?array $groups): void
    {
        $this->groups = $groups;
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
     * @param ?int $applicationVersion
     */
    public function setApplicationVersion(?int $applicationVersion): void
    {
        $this->applicationVersion = $applicationVersion;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[DiscountCode::FIELD_CREATED_AT]) && $data[DiscountCode::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[DiscountCode::FIELD_CREATED_AT] = $data[DiscountCode::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[DiscountCode::FIELD_LAST_MODIFIED_AT]) && $data[DiscountCode::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[DiscountCode::FIELD_LAST_MODIFIED_AT] = $data[DiscountCode::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[DiscountCode::FIELD_VALID_FROM]) && $data[DiscountCode::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[DiscountCode::FIELD_VALID_FROM] = $data[DiscountCode::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[DiscountCode::FIELD_VALID_UNTIL]) && $data[DiscountCode::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[DiscountCode::FIELD_VALID_UNTIL] = $data[DiscountCode::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
