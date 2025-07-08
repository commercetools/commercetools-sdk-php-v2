<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\DiscountCodes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\CartDiscountKeyReferenceCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceModel;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringModel;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomModel;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class DiscountCodeImportModel extends JsonObjectModel implements DiscountCodeImport
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?LocalizedString
     */
    protected $description;

    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?CartDiscountKeyReferenceCollection
     */
    protected $cartDiscounts;

    /**
     *
     * @var ?string
     */
    protected $cartPredicate;

    /**
     *
     * @var ?bool
     */
    protected $isActive;

    /**
     *
     * @var ?int
     */
    protected $maxApplications;

    /**
     *
     * @var ?int
     */
    protected $maxApplicationsPerCustomer;

    /**
     *
     * @var ?array
     */
    protected $groups;

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
     * @var ?Custom
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?LocalizedString $name = null,
        ?LocalizedString $description = null,
        ?string $code = null,
        ?CartDiscountKeyReferenceCollection $cartDiscounts = null,
        ?string $cartPredicate = null,
        ?bool $isActive = null,
        ?int $maxApplications = null,
        ?int $maxApplicationsPerCustomer = null,
        ?array $groups = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null,
        ?Custom $custom = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->description = $description;
        $this->code = $code;
        $this->cartDiscounts = $cartDiscounts;
        $this->cartPredicate = $cartPredicate;
        $this->isActive = $isActive;
        $this->maxApplications = $maxApplications;
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
        $this->groups = $groups;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:DiscountCode">DiscountCode</a> with this <code>key</code> exists, it is updated with the imported data.</p>
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
     * <p>Maps to <code>DiscountCode.name</code>.</p>
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
     * <p>Maps to <code>DiscountCode.description</code>.</p>
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
     * <p>Maps to <code>DiscountCode.code</code>. This value cannot be updated. Attempting to update this value will result in an <a href="/import-export/error#invalidfieldsupdateerror">InvalidFieldsUpdate</a> error.</p>
     *
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
     * <p>Maps to <code>DiscountCode.cartDiscounts</code>. If the referenced <a href="ctp:api:type:CartDiscount">CartDiscounts</a> do not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced CartDiscounts are created.</p>
     *
     *
     * @return null|CartDiscountKeyReferenceCollection
     */
    public function getCartDiscounts()
    {
        if (is_null($this->cartDiscounts)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CART_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->cartDiscounts = CartDiscountKeyReferenceCollection::fromArray($data);
        }

        return $this->cartDiscounts;
    }

    /**
     * <p>Maps to <code>DiscountCode.cartPredicate</code>.</p>
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
     * <p>Maps to <code>DiscountCode.isActive</code>.</p>
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
     * <p>Maps to <code>DiscountCode.maxApplications</code>.</p>
     *
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
     * <p>Maps to <code>DiscountCode.maxApplicationsPerCustomer</code>.</p>
     *
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
     * <p>Maps to <code>DiscountCode.groups</code>.</p>
     *
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
     * <p>Maps to <code>DiscountCode.validFrom</code>.</p>
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
     * <p>Maps to <code>DiscountCode.validUntil</code>.</p>
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
     * <p>Maps to <code>DiscountCode.custom</code>.</p>
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
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
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
     * @param ?CartDiscountKeyReferenceCollection $cartDiscounts
     */
    public function setCartDiscounts(?CartDiscountKeyReferenceCollection $cartDiscounts): void
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
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void
    {
        $this->custom = $custom;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[DiscountCodeImport::FIELD_VALID_FROM]) && $data[DiscountCodeImport::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[DiscountCodeImport::FIELD_VALID_FROM] = $data[DiscountCodeImport::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[DiscountCodeImport::FIELD_VALID_UNTIL]) && $data[DiscountCodeImport::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[DiscountCodeImport::FIELD_VALID_UNTIL] = $data[DiscountCodeImport::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
