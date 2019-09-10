<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class ProductDiscountDraftModel extends JsonObjectModel implements ProductDiscountDraft
{
    /**
     * @var ?string
     */
    protected $predicate;

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
     * @var ?ProductDiscountValue
     */
    protected $value;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        string $predicate = null,
        string $sortOrder = null,
        LocalizedString $name = null,
        DateTimeImmutable $validUntil = null,
        LocalizedString $description = null,
        DateTimeImmutable $validFrom = null,
        bool $isActive = null,
        ProductDiscountValue $value = null,
        string $key = null
    ) {
        $this->predicate = $predicate;
        $this->sortOrder = $sortOrder;
        $this->name = $name;
        $this->validUntil = $validUntil;
        $this->description = $description;
        $this->validFrom = $validFrom;
        $this->isActive = $isActive;
        $this->value = $value;
        $this->key = $key;
    }

    /**
     * @return null|string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductDiscountDraft::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    /**
     * @return null|string
     */
    public function getSortOrder()
    {
        if (is_null($this->sortOrder)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductDiscountDraft::FIELD_SORT_ORDER);
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
            $data = $this->raw(ProductDiscountDraft::FIELD_NAME);
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
            $data = $this->raw(ProductDiscountDraft::FIELD_VALID_UNTIL);
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
            $data = $this->raw(ProductDiscountDraft::FIELD_DESCRIPTION);
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
            $data = $this->raw(ProductDiscountDraft::FIELD_VALID_FROM);
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
            $data = $this->raw(ProductDiscountDraft::FIELD_IS_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->isActive = (bool) $data;
        }

        return $this->isActive;
    }

    /**
     * @return null|ProductDiscountValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDiscountDraft::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = ProductDiscountValueModel::resolveDiscriminatorClass($data);
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
            $data = $this->raw(ProductDiscountDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
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

    public function setValue(?ProductDiscountValue $value): void
    {
        $this->value = $value;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ProductDiscountDraft::FIELD_VALID_UNTIL]) && $data[ProductDiscountDraft::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[ProductDiscountDraft::FIELD_VALID_UNTIL] = $data[ProductDiscountDraft::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ProductDiscountDraft::FIELD_VALID_FROM]) && $data[ProductDiscountDraft::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[ProductDiscountDraft::FIELD_VALID_FROM] = $data[ProductDiscountDraft::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
