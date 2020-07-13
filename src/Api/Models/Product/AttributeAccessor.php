<?php


namespace Commercetools\Api\Models\Product;

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
            return new self($attribute);
        };
    }
}
