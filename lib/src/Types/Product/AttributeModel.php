<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\Reference;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\ProductType\AttributeLocalizedEnumValue;
use Commercetools\Types\ProductType\AttributePlainEnumValue;
use Commercetools\Types\Common\Money;

class AttributeModel extends JsonObjectModel implements Attribute {
    /**
     * @var string
     */
    protected $name;
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(Attribute::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }
    /**
     * @param $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueAsString()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            $value = (string)$value;
            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return int
     */
    public function getValueAsNumber()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            $value = (int)$value;
            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getValueAsDatetime()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getValueAsDateOnly()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d', $value);
            $value = $dateTime ? $dateTime : null;

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getValueAsTimeOnly()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            $dateTime = \DateTimeImmutable::createFromFormat('H:i:s.u', $value);
            $value = $dateTime ? $dateTime : null;

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getValueAsBoolean()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return AttributeLocalizedEnumValue
     */
    public function getValueAsAttributeLocalizedEnumValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(AttributeLocalizedEnumValue::class, null);
            }
            $value = $this->mapData(AttributeLocalizedEnumValue::class, $value);

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return AttributePlainEnumValue
     */
    public function getValueAsAttributePlainEnumValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(AttributePlainEnumValue::class, null);
            }
            $value = $this->mapData(AttributePlainEnumValue::class, $value);

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return Reference
     */
    public function getValueAsReference()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            $resolvedClass = $this->resolveDiscriminator(Reference::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return Money
     */
    public function getValueAsMoney()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return LocalizedString
     */
    public function getValueAsLocalizedString()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return AttributeCollection
     */
    public function getValueAsAttributeCollection()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(AttributeCollection::class, null);
            }
            $value = $this->mapData(AttributeCollection::class, $value);
            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @return array
     */
    public function getValueAsArray()
    {
        if (is_null($this->value)) {
            $value = $this->raw(Attribute::FIELD_VALUE);
            $this->value = $value;
        }
        return $this->value;
    }

}
