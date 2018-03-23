<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;

class ProductDiscountDraftModel extends JsonObjectModel implements ProductDiscountDraft {
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var ProductDiscountValue
     */
    protected $value;
    /**
     * @var string
     */
    protected $predicate;
    /**
     * @var string
     */
    protected $sortOrder;
    /**
     * @var mixed
     */
    protected $isActive;
    /**
     * @var \DateTimeImmutable
     */
    protected $validFrom;
    /**
     * @var \DateTimeImmutable
     */
    protected $validUntil;

    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ProductDiscountDraft::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(ProductDiscountDraft::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return ProductDiscountValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(ProductDiscountDraft::FIELD_VALUE);
            $resolvedClass = $this->resolveDiscriminator(ProductDiscountValue::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->value = $value;
        }
        return $this->value;
    }
    /**
     * @return string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            $value = $this->raw(ProductDiscountDraft::FIELD_PREDICATE);
            $value = (string)$value;
            $this->predicate = $value;
        }
        return $this->predicate;
    }
    /**
     * @return string
     */
    public function getSortOrder()
    {
        if (is_null($this->sortOrder)) {
            $value = $this->raw(ProductDiscountDraft::FIELD_SORT_ORDER);
            $value = (string)$value;
            $this->sortOrder = $value;
        }
        return $this->sortOrder;
    }
    /**
     * @return mixed
     */
    public function getIsActive()
    {
        if (is_null($this->isActive)) {
            $value = $this->raw(ProductDiscountDraft::FIELD_IS_ACTIVE);
            $this->isActive = $value;
        }
        return $this->isActive;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            $value = $this->raw(ProductDiscountDraft::FIELD_VALID_FROM);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->validFrom = $value;
        }
        return $this->validFrom;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            $value = $this->raw(ProductDiscountDraft::FIELD_VALID_UNTIL);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->validUntil = $value;
        }
        return $this->validUntil;
    }

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }
    /**
     * @param ProductDiscountValue $value
     * @return $this
     */
    public function setValue(ProductDiscountValue $value)
    {
        $this->value = $value;

        return $this;
    }
    /**
     * @param string $predicate
     * @return $this
     */
    public function setPredicate(string $predicate)
    {
        $this->predicate = (string)$predicate;

        return $this;
    }
    /**
     * @param string $sortOrder
     * @return $this
     */
    public function setSortOrder(string $sortOrder)
    {
        $this->sortOrder = (string)$sortOrder;

        return $this;
    }
    /**
     * @param $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        if ($validFrom instanceof \DateTime) {
            $validFrom = \DateTimeImmutable::createFromMutable($validFrom);
        }
        if (!$validFrom instanceof \DateTimeImmutable) {
            $validFrom = new \DateTimeImmutable($validFrom);
        }
        $this->$validFrom = $validFrom;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        if ($validUntil instanceof \DateTime) {
            $validUntil = \DateTimeImmutable::createFromMutable($validUntil);
        }
        if (!$validUntil instanceof \DateTimeImmutable) {
            $validUntil = new \DateTimeImmutable($validUntil);
        }
        $this->$validUntil = $validUntil;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[ProductDiscountDraft::FIELD_VALID_FROM]) && $data[ProductDiscountDraft::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[ProductDiscountDraft::FIELD_VALID_FROM] = $data[ProductDiscountDraft::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[ProductDiscountDraft::FIELD_VALID_UNTIL]) && $data[ProductDiscountDraft::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[ProductDiscountDraft::FIELD_VALID_UNTIL] = $data[ProductDiscountDraft::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
