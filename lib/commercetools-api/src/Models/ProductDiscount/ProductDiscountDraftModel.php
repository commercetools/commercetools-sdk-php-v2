<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ProductDiscountDraftModel extends JsonObjectModel implements ProductDiscountDraft
{
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
     * @var ?ProductDiscountValueDraft
     */
    protected $value;

    /**
     * @var ?string
     */
    protected $predicate;

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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $name = null,
        ?string $key = null,
        ?LocalizedString $description = null,
        ?ProductDiscountValueDraft $value = null,
        ?string $predicate = null,
        ?string $sortOrder = null,
        ?bool $isActive = null,
        ?DateTimeImmutable $validFrom = null,
        ?DateTimeImmutable $validUntil = null
    ) {
        $this->name = $name;
        $this->key = $key;
        $this->description = $description;
        $this->value = $value;
        $this->predicate = $predicate;
        $this->sortOrder = $sortOrder;
        $this->isActive = $isActive;
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;
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
     * <p>User-specific unique identifier for a product discount.
     * Must be unique across a project.
     * The field can be reset using the Set Key UpdateAction</p>
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
     * @return null|ProductDiscountValueDraft
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = ProductDiscountValueDraftModel::of($data);
        }

        return $this->value;
    }

    /**
     * <p>A valid ProductDiscount Predicate.</p>
     *
     * @return null|string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    /**
     * <p>The string must contain a decimal number between 0 and 1.
     * A discount with greater sortOrder is prioritized higher than a discount with lower sortOrder.</p>
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
     * <p>If set to <code>true</code> the discount will be applied to product prices.</p>
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
     * <p>The time from which the discount should be effective.
     * Please take Eventual Consistency into account for calculated product discount values.</p>
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
     * <p>The time from which the discount should be effective.
     * Please take Eventual Consistency into account for calculated undiscounted values.</p>
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
     * @param ?ProductDiscountValueDraft $value
     */
    public function setValue(?ProductDiscountValueDraft $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
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


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ProductDiscountDraft::FIELD_VALID_FROM]) && $data[ProductDiscountDraft::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[ProductDiscountDraft::FIELD_VALID_FROM] = $data[ProductDiscountDraft::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ProductDiscountDraft::FIELD_VALID_UNTIL]) && $data[ProductDiscountDraft::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[ProductDiscountDraft::FIELD_VALID_UNTIL] = $data[ProductDiscountDraft::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
