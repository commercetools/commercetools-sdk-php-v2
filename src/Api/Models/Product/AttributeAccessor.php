<?php


namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValue;
use Commercetools\Api\Models\ProductType\AttributeLocalizedEnumValueModel;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValue;
use Commercetools\Api\Models\ProductType\AttributePlainEnumValueModel;
use stdClass;

class AttributeAccessor
{
    /**
     * @var Attribute
     */
    private $attribute;

    private function __construct(Attribute $attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->attribute->getValue();
    }

    /**
     * @psalm-return callable(Attribute): self
     */
    public static function of()
    {
        return function (Attribute $attribute): AttributeAccessor {
            return new static($attribute);
        };
    }

    public function getEnumValue(): AttributePlainEnumValue
    {
        /**
         * @psalm-var array<string, mixed>|null|stdClass $value
         */
        $value = $this->attribute->getValue();
        return AttributePlainEnumValueModel::of($value);
    }

    public function getLocalizedEnumValue(): AttributeLocalizedEnumValue
    {
        /**
         * @psalm-var array<string, mixed>|null|stdClass $value
         */
        $value = $this->attribute->getValue();
        return AttributeLocalizedEnumValueModel::of($value);
    }

    public function getTextValue(): string
    {
        return (string)$this->attribute->getValue();
    }
}
