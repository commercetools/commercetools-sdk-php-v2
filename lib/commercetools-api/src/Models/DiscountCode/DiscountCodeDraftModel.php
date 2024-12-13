<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
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
final class DiscountCodeDraftModel extends JsonObjectModel implements DiscountCodeDraft
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
     * @var ?CartDiscountResourceIdentifierCollection
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
     * @var ?CustomFieldsDraft
     */
    protected $custom;

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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?LocalizedString $name = null,
        ?LocalizedString $description = null,
        ?string $code = null,
        ?CartDiscountResourceIdentifierCollection $cartDiscounts = null,
        ?string $cartPredicate = null,
        ?bool $isActive = null,
        ?int $maxApplications = null,
        ?int $maxApplicationsPerCustomer = null,
        ?CustomFieldsDraft $custom = null,
        ?array $groups = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null
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
        $this->custom = $custom;
        $this->groups = $groups;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
    }

    /**
     * <p>User-defined unique identifier for the DiscountCode.</p>
     * <p>This field is optional for backwards compatibility reasons, but we strongly recommend setting it. Keys are mandatory for importing Discount Codes with the <a href="/../import-export/overview">Import API</a> and the <a href="/../merchant-center/import-data">Merchant Center</a>.</p>
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
     * <p>Name of the DiscountCode.</p>
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
     * <p>Description of the DiscountCode.</p>
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
     * <p>User-defined unique identifier for the DiscountCode that can be <a href="/../api/projects/carts#add-discountcode">added to the Cart</a> to apply the related <a href="ctp:api:type:CartDiscount">CartDiscounts</a>.
     * It cannot be modified after the DiscountCode is created.</p>
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
     * <p>Specify what CartDiscounts the API applies when you add the DiscountCode to the Cart.</p>
     *
     *
     * @return null|CartDiscountResourceIdentifierCollection
     */
    public function getCartDiscounts()
    {
        if (is_null($this->cartDiscounts)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CART_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->cartDiscounts = CartDiscountResourceIdentifierCollection::fromArray($data);
        }

        return $this->cartDiscounts;
    }

    /**
     * <p>DiscountCode can only be applied to Carts that match this predicate.</p>
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
     * <p>Only active DiscountCodes can be applied to the Cart.</p>
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
     * <p>Number of times the DiscountCode can be applied.</p>
     * <p>If not set, the DiscountCode can be applied any number of times.</p>
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
     * <p>Number of times the DiscountCode can be applied per Customer.</p>
     * <p>If not set, the DiscountCode can be applied any number of times.</p>
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
     * <p>Custom Fields for the DiscountCode.</p>
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
     * <p>Groups to which the DiscountCode will belong to.</p>
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
     * <p>Date and time (UTC) from which the DiscountCode is effective. Must be earlier than <code>validUntil</code>.</p>
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
     * <p>Date and time (UTC) until which the DiscountCode is effective. Must be later than <code>validFrom</code>.</p>
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
     * @param ?CartDiscountResourceIdentifierCollection $cartDiscounts
     */
    public function setCartDiscounts(?CartDiscountResourceIdentifierCollection $cartDiscounts): void
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
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
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


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[DiscountCodeDraft::FIELD_VALID_FROM]) && $data[DiscountCodeDraft::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[DiscountCodeDraft::FIELD_VALID_FROM] = $data[DiscountCodeDraft::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[DiscountCodeDraft::FIELD_VALID_UNTIL]) && $data[DiscountCodeDraft::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[DiscountCodeDraft::FIELD_VALID_UNTIL] = $data[DiscountCodeDraft::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
