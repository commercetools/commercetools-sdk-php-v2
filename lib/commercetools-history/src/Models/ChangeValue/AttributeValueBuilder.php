<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeValue>
 */
final class AttributeValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var null|mixed|mixed
     */
    private $value;

    /**
     * <p>Name of the Attribute set.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Value set for the Attribute determined by the <a href="ctp:api:type:AttributeType">AttributeType</a>:</p>
     * <ul>
     * <li>For <a href="ctp:api:type:AttributeEnumType">Enum Type</a> and <a href="ctp:api:type:AttributeLocalizedEnumType">Localized Enum Type</a>, <code>value</code> is the <code>key</code> of the <a href="ctp:api:type:AttributePlainEnumValue">Plain Enum Value</a> or <a href="ctp:api:type:AttributeLocalizedEnumValue">Localized Enum Value</a> objects,
     * or the complete objects.</li>
     * <li>For <a href="ctp:api:type:AttributeLocalizableTextType">Localizable Text Type</a>, <code>value</code> is the <a href="ctp:api:type:LocalizedString">LocalizedString</a> object.</li>
     * <li>For <a href="ctp:api:type:AttributeMoneyType">Money Type</a> Attributes, <code>value</code> is the <a href="ctp:api:type:Money">Money</a> object.</li>
     * <li>For <a href="ctp:api:type:AttributeSetType">Set Type</a> Attributes, <code>value</code> is the entire <code>set</code> object.</li>
     * <li>For <a href="ctp:api:type:AttributeNestedType">Nested Type</a> Attributes, <code>value</code> is the list of values of all Attributes of the nested Product.</li>
     * <li>For <a href="ctp:api:type:AttributeReferenceType">Reference Type</a> Attributes, <code>value</code> is the <a href="ctp:api:type:Reference">Reference</a> object.</li>
     * </ul>
     *

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function withValue( $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): AttributeValue
    {
        return new AttributeValueModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): AttributeValueBuilder
    {
        return new self();
    }
}
