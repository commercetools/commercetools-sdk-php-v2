<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringSetAttributeInAllVariantsAction extends ProductTailoringUpdateAction
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The name of the Attribute to set.</p>
     *

     * @return null|string
     */
    public function getName();

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
    public function getValue();

    /**
     * <p>If <code>true</code>, only the staged Attributes are set. If <code>false</code>, both the current and staged Attributes are set.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
