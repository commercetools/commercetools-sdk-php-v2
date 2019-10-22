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
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class DiscountCodeDraftModel extends JsonObjectModel implements DiscountCodeDraft
{
    /**
     * @var ?CartDiscountResourceIdentifierCollection
     */
    protected $cartDiscounts;

    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $cartPredicate;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @var ?array
     */
    protected $groups;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;

    /**
     * @var ?int
     */
    protected $maxApplicationsPerCustomer;

    /**
     * @var ?bool
     */
    protected $isActive;

    /**
     * @var ?int
     */
    protected $maxApplications;

    public function __construct(
        CartDiscountResourceIdentifierCollection $cartDiscounts = null,
        string $code = null,
        string $cartPredicate = null,
        CustomFieldsDraft $custom = null,
        LocalizedString $name = null,
        DateTimeImmutable $validUntil = null,
        array $groups = null,
        LocalizedString $description = null,
        DateTimeImmutable $validFrom = null,
        int $maxApplicationsPerCustomer = null,
        bool $isActive = null,
        int $maxApplications = null
    ) {
        $this->cartDiscounts = $cartDiscounts;
        $this->code = $code;
        $this->cartPredicate = $cartPredicate;
        $this->custom = $custom;
        $this->name = $name;
        $this->validUntil = $validUntil;
        $this->groups = $groups;
        $this->description = $description;
        $this->validFrom = $validFrom;
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
        $this->isActive = $isActive;
        $this->maxApplications = $maxApplications;
    }

    /**
     * @return null|CartDiscountResourceIdentifierCollection
     */
    public function getCartDiscounts()
    {
        if (is_null($this->cartDiscounts)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(DiscountCodeDraft::FIELD_CART_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->cartDiscounts = CartDiscountResourceIdentifierCollection::fromArray($data);
        }

        return $this->cartDiscounts;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DiscountCodeDraft::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getCartPredicate()
    {
        if (is_null($this->cartPredicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DiscountCodeDraft::FIELD_CART_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->cartPredicate = (string) $data;
        }

        return $this->cartPredicate;
    }

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DiscountCodeDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DiscountCodeDraft::FIELD_NAME);
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
            $data = $this->raw(DiscountCodeDraft::FIELD_VALID_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validUntil = $data;
        }

        return $this->validUntil;
    }

    /**
     * @return null|array
     */
    public function getGroups()
    {
        if (is_null($this->groups)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(DiscountCodeDraft::FIELD_GROUPS);
            if (is_null($data)) {
                return null;
            }
            $this->groups = $data;
        }

        return $this->groups;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DiscountCodeDraft::FIELD_DESCRIPTION);
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
            $data = $this->raw(DiscountCodeDraft::FIELD_VALID_FROM);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::TIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validFrom = $data;
        }

        return $this->validFrom;
    }

    /**
     * @return null|int
     */
    public function getMaxApplicationsPerCustomer()
    {
        if (is_null($this->maxApplicationsPerCustomer)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(DiscountCodeDraft::FIELD_MAX_APPLICATIONS_PER_CUSTOMER);
            if (is_null($data)) {
                return null;
            }
            $this->maxApplicationsPerCustomer = (int) $data;
        }

        return $this->maxApplicationsPerCustomer;
    }

    /**
     * @return null|bool
     */
    public function getIsActive()
    {
        if (is_null($this->isActive)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(DiscountCodeDraft::FIELD_IS_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->isActive = (bool) $data;
        }

        return $this->isActive;
    }

    /**
     * @return null|int
     */
    public function getMaxApplications()
    {
        if (is_null($this->maxApplications)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(DiscountCodeDraft::FIELD_MAX_APPLICATIONS);
            if (is_null($data)) {
                return null;
            }
            $this->maxApplications = (int) $data;
        }

        return $this->maxApplications;
    }

    public function setCartDiscounts(?CartDiscountResourceIdentifierCollection $cartDiscounts): void
    {
        $this->cartDiscounts = $cartDiscounts;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function setCartPredicate(?string $cartPredicate): void
    {
        $this->cartPredicate = $cartPredicate;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    public function setGroups(?array $groups): void
    {
        $this->groups = $groups;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    public function setMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer): void
    {
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
    }

    public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function setMaxApplications(?int $maxApplications): void
    {
        $this->maxApplications = $maxApplications;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[DiscountCodeDraft::FIELD_VALID_UNTIL]) && $data[DiscountCodeDraft::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[DiscountCodeDraft::FIELD_VALID_UNTIL] = $data[DiscountCodeDraft::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[DiscountCodeDraft::FIELD_VALID_FROM]) && $data[DiscountCodeDraft::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[DiscountCodeDraft::FIELD_VALID_FROM] = $data[DiscountCodeDraft::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
