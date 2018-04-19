<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;

class CartDiscountDraftModel extends JsonObjectModel implements CartDiscountDraft
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
     * @var CartDiscountValue
     */
    protected $value;
    /**
     * @var string
     */
    protected $cartPredicate;
    /**
     * @var CartDiscountTarget
     */
    protected $target;
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
     * @var mixed
     */
    protected $requiresDiscountCode;
    /**
     * @var string
     */
    protected $stackingMode;
    /**
     * @var CustomFields
     */
    protected $custom;

    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(CartDiscountDraft::FIELD_NAME);
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
            $value = $this->raw(CartDiscountDraft::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return CartDiscountValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(CartDiscountDraft::FIELD_VALUE);
            $resolvedClass = $this->resolveDiscriminator(CartDiscountValue::class, $value);
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
    public function getCartPredicate()
    {
        if (is_null($this->cartPredicate)) {
            $value = $this->raw(CartDiscountDraft::FIELD_CART_PREDICATE);
            $value = (string)$value;
            $this->cartPredicate = $value;
        }
        return $this->cartPredicate;
    }
    /**
     * @return CartDiscountTarget
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            $value = $this->raw(CartDiscountDraft::FIELD_TARGET);
            $resolvedClass = $this->resolveDiscriminator(CartDiscountTarget::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->target = $value;
        }
        return $this->target;
    }
    /**
     * @return string
     */
    public function getSortOrder()
    {
        if (is_null($this->sortOrder)) {
            $value = $this->raw(CartDiscountDraft::FIELD_SORT_ORDER);
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
            $value = $this->raw(CartDiscountDraft::FIELD_IS_ACTIVE);
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
            $value = $this->raw(CartDiscountDraft::FIELD_VALID_FROM);
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
            $value = $this->raw(CartDiscountDraft::FIELD_VALID_UNTIL);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->validUntil = $value;
        }
        return $this->validUntil;
    }
    /**
     * @return mixed
     */
    public function getRequiresDiscountCode()
    {
        if (is_null($this->requiresDiscountCode)) {
            $value = $this->raw(CartDiscountDraft::FIELD_REQUIRES_DISCOUNT_CODE);
            $this->requiresDiscountCode = $value;
        }
        return $this->requiresDiscountCode;
    }
    /**
     * @return string
     */
    public function getStackingMode()
    {
        if (is_null($this->stackingMode)) {
            $value = $this->raw(CartDiscountDraft::FIELD_STACKING_MODE);
            $value = (string)$value;
            $this->stackingMode = $value;
        }
        return $this->stackingMode;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(CartDiscountDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
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
     * @param CartDiscountValue $value
     * @return $this
     */
    public function setValue(CartDiscountValue $value)
    {
        $this->value = $value;

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
     * @param CartDiscountTarget $target
     * @return $this
     */
    public function setTarget(CartDiscountTarget $target)
    {
        $this->target = $target;

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
    /**
     * @param $requiresDiscountCode
     * @return $this
     */
    public function setRequiresDiscountCode($requiresDiscountCode)
    {
        $this->requiresDiscountCode = $requiresDiscountCode;

        return $this;
    }
    /**
     * @param string $stackingMode
     * @return $this
     */
    public function setStackingMode(string $stackingMode)
    {
        $this->stackingMode = (string)$stackingMode;

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


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[CartDiscountDraft::FIELD_VALID_FROM]) && $data[CartDiscountDraft::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
            $data[CartDiscountDraft::FIELD_VALID_FROM] = $data[CartDiscountDraft::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[CartDiscountDraft::FIELD_VALID_UNTIL]) && $data[CartDiscountDraft::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
            $data[CartDiscountDraft::FIELD_VALID_UNTIL] = $data[CartDiscountDraft::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
