<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTailoringSetAttributeInAllVariantsAction>
 */
final class ProductTailoringSetAttributeInAllVariantsActionBuilder implements Builder
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

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The name of the Attribute to set.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Value to set for the Attributes. If empty, any existing value will be removed.</p>
     * <p>The <a href="ctp:api:type:AttributeType">AttributeType</a> determines the format of the Attribute <code>value</code> to be provided:</p>
     * <ul>
     * <li>For <a href="ctp:api:type:AttributeEnumType">Enum Type</a> and <a href="ctp:api:type:AttributeLocalizedEnumType">Localized Enum Type</a>,
     * use the <code>key</code> of the <a href="ctp:api:type:AttributePlainEnumValue">Plain Enum Value</a> or <a href="ctp:api:type:AttributeLocalizedEnumValue">Localized Enum Value</a> objects,
     * or the complete objects as <code>value</code>.</li>
     * <li>For <a href="ctp:api:type:AttributeLocalizableTextType">Localizable Text Type</a>, use the <a href="ctp:api:type:LocalizedString">LocalizedString</a> object as <code>value</code>.</li>
     * <li>For <a href="ctp:api:type:AttributeMoneyType">Money Type</a> Attributes, use the <a href="ctp:api:type:Money">Money</a> object as <code>value</code>.</li>
     * <li>For <a href="ctp:api:type:AttributeSetType">Set Type</a> Attributes, use the entire <code>set</code> object  as <code>value</code>.</li>
     * <li>For <a href="ctp:api:type:AttributeReferenceType">Reference Type</a> Attributes, use the <a href="ctp:api:type:Reference">Reference</a> object as <code>value</code>.</li>
     * </ul>
     * <p>Tailoring of <a href="ctp:api:type:AttributeNestedType">Nested Type</a> Attributes is <strong>not supported</strong>.</p>
     *

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <p>If <code>true</code>, only the staged Attributes are set. If <code>false</code>, both the current and staged Attributes are set.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
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
    public function withValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): ProductTailoringSetAttributeInAllVariantsAction
    {
        return new ProductTailoringSetAttributeInAllVariantsActionModel(
            $this->name,
            $this->value,
            $this->staged
        );
    }

    public static function of(): ProductTailoringSetAttributeInAllVariantsActionBuilder
    {
        return new self();
    }
}