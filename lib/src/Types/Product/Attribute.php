<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Reference;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\ProductType\AttributeLocalizedEnumValue;
use Commercetools\Types\ProductType\AttributePlainEnumValue;
use Commercetools\Types\Common\Money;

interface Attribute extends JsonObject {
    const FIELD_NAME = 'name';
    const FIELD_VALUE = 'value';

    /**
     * @return string
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @return string
     */
    public function getValueAsString();

    /**
     * @return int
     */
    public function getValueAsNumber();

    /**
     * @return \DateTimeImmutable
     */
    public function getValueAsDatetime();

    /**
     * @return \DateTimeImmutable
     */
    public function getValueAsDateOnly();

    /**
     * @return \DateTimeImmutable
     */
    public function getValueAsTimeOnly();

    /**
     * @return mixed
     */
    public function getValueAsBoolean();

    /**
     * @return AttributeLocalizedEnumValue
     */
    public function getValueAsAttributeLocalizedEnumValue();

    /**
     * @return LocalizedString
     */
    public function getValueAsLocalizedString();

    /**
     * @return AttributePlainEnumValue
     */
    public function getValueAsAttributePlainEnumValue();

    /**
     * @return Reference
     */
    public function getValueAsReference();

    /**
     * @return Money
     */
    public function getValueAsMoney();

    /**
     * @return AttributeCollection
     */
    public function getValueAsAttributeCollection();

    /**
     * @return array
     */
    public function getValueAsArray();

}
