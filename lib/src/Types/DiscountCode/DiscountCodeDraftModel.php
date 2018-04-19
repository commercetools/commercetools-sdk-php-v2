<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\CartDiscount\CartDiscountReference;
use Commercetools\Types\CartDiscount\CartDiscountReferenceCollection;

class DiscountCodeDraftModel extends JsonObjectModel implements DiscountCodeDraft
{
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var CartDiscountReferenceCollection
     */
    protected $cartDiscounts;
    /**
     * @var string
     */
    protected $cartPredicate;
    /**
     * @var mixed
     */
    protected $isActive;
    /**
     * @var int
     */
    protected $maxApplications;
    /**
     * @var int
     */
    protected $maxApplicationsPerCustomer;
    /**
     * @var CustomFields
     */
    protected $custom;
    /**
     * @var array
     */
    protected $groups;
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
            $value = $this->raw(DiscountCodeDraft::FIELD_NAME);
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
            $value = $this->raw(DiscountCodeDraft::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            $value = $this->raw(DiscountCodeDraft::FIELD_CODE);
            $value = (string)$value;
            $this->code = $value;
        }
        return $this->code;
    }
    /**
     * @return CartDiscountReferenceCollection
     */
    public function getCartDiscounts()
    {
        if (is_null($this->cartDiscounts)) {
            $value = $this->raw(DiscountCodeDraft::FIELD_CART_DISCOUNTS);
            if (is_null($value)) {
                return $this->mapData(CartDiscountReferenceCollection::class, null);
            }
            $value = $this->mapData(CartDiscountReferenceCollection::class, $value);
            $this->cartDiscounts = $value;
        }
        return $this->cartDiscounts;
    }
    /**
     * @return string
     */
    public function getCartPredicate()
    {
        if (is_null($this->cartPredicate)) {
            $value = $this->raw(DiscountCodeDraft::FIELD_CART_PREDICATE);
            $value = (string)$value;
            $this->cartPredicate = $value;
        }
        return $this->cartPredicate;
    }
    /**
     * @return mixed
     */
    public function getIsActive()
    {
        if (is_null($this->isActive)) {
            $value = $this->raw(DiscountCodeDraft::FIELD_IS_ACTIVE);
            $this->isActive = $value;
        }
        return $this->isActive;
    }
    /**
     * @return int
     */
    public function getMaxApplications()
    {
        if (is_null($this->maxApplications)) {
            $value = $this->raw(DiscountCodeDraft::FIELD_MAX_APPLICATIONS);
            $value = (int)$value;
            $this->maxApplications = $value;
        }
        return $this->maxApplications;
    }
    /**
     * @return int
     */
    public function getMaxApplicationsPerCustomer()
    {
        if (is_null($this->maxApplicationsPerCustomer)) {
            $value = $this->raw(DiscountCodeDraft::FIELD_MAX_APPLICATIONS_PER_CUSTOMER);
            $value = (int)$value;
            $this->maxApplicationsPerCustomer = $value;
        }
        return $this->maxApplicationsPerCustomer;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(DiscountCodeDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return array
     */
    public function getGroups()
    {
        if (is_null($this->groups)) {
            $value = $this->raw(DiscountCodeDraft::FIELD_GROUPS);
            $value = (array)$value;
            $this->groups = $value;
        }
        return $this->groups;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            $value = $this->raw(DiscountCodeDraft::FIELD_VALID_FROM);
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
            $value = $this->raw(DiscountCodeDraft::FIELD_VALID_UNTIL);
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
     * @param string $code
     * @return $this
     */
    public function setCode(string $code)
    {
        $this->code = (string)$code;

        return $this;
    }
    /**
     * @param CartDiscountReferenceCollection $cartDiscounts
     * @return $this
     */
    public function setCartDiscounts(CartDiscountReferenceCollection $cartDiscounts)
    {
        $this->cartDiscounts = $cartDiscounts;

        return $this;
    }
    /**
     * @param string $cartPredicate
     * @return $this
     */
    public function setCartPredicate(string $cartPredicate)
    {
        $this->cartPredicate = (string)$cartPredicate;

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
     * @param int $maxApplications
     * @return $this
     */
    public function setMaxApplications(int $maxApplications)
    {
        $this->maxApplications = (int)$maxApplications;

        return $this;
    }
    /**
     * @param int $maxApplicationsPerCustomer
     * @return $this
     */
    public function setMaxApplicationsPerCustomer(int $maxApplicationsPerCustomer)
    {
        $this->maxApplicationsPerCustomer = (int)$maxApplicationsPerCustomer;

        return $this;
    }
    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }
    /**
     * @param $groups
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;

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
        if (isset($data[DiscountCodeDraft::FIELD_VALID_FROM]) && $data[DiscountCodeDraft::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[DiscountCodeDraft::FIELD_VALID_FROM] = $data[DiscountCodeDraft::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[DiscountCodeDraft::FIELD_VALID_UNTIL]) && $data[DiscountCodeDraft::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[DiscountCodeDraft::FIELD_VALID_UNTIL] = $data[DiscountCodeDraft::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
