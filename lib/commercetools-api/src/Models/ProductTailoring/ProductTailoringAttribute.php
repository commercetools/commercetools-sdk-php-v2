<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringAttribute extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * <p>Name of the Attribute.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
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
     * <p>Tailoring of <a href="ctp:api:type:AttributeNestedType">Nested Type</a> Attributes is not supported.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
