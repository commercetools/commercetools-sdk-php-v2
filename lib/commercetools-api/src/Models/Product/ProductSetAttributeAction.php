<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetAttributeAction extends ProductUpdateAction
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <code>id</code> of the ProductVariant to update.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The <code>sku</code> of the ProductVariant to update.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>The name of the Attribute to set.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Value to set for the Attribute. If empty, any existing value will be removed.</p>
     * <p>The <a href="ctp:api:type:AttributeType">AttributeType</a> determines the format of the Attribute <code>value</code> to be provided:</p>
     * <ul>
     * <li>For <a href="ctp:api:type:AttributeEnumType">Enum Type</a> and <a href="ctp:api:type:AttributeLocalizedEnumType">Localized Enum Type</a>,
     * use the <code>key</code> of the <a href="ctp:api:type:AttributePlainEnumValue">Plain Enum Value</a> or <a href="ctp:api:type:AttributeLocalizedEnumValue">Localized Enum Value</a> objects,
     * or the complete objects as <code>value</code>.</li>
     * <li>For <a href="ctp:api:type:AttributeLocalizableTextType">Localizable Text Type</a>, use the <a href="ctp:api:type:LocalizedString">LocalizedString</a> object as <code>value</code>.</li>
     * <li>For <a href="ctp:api:type:AttributeMoneyType">Money Type</a> Attributes, use the <a href="ctp:api:type:Money">Money</a> object as <code>value</code>.</li>
     * <li>For <a href="ctp:api:type:AttributeSetType">Set Type</a> Attributes, use the entire <code>set</code> object  as <code>value</code>.</li>
     * <li>For <a href="ctp:api:type:AttributeNestedType">Nested Type</a> Attributes, use the list of values of all Attributes of the nested Product as <code>value</code>.</li>
     * <li>For <a href="ctp:api:type:AttributeReferenceType">Reference Type</a> Attributes, use the <a href="ctp:api:type:Reference">Reference</a> object as <code>value</code>.</li>
     * </ul>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * <p>If <code>true</code>, only the staged Attribute is set. If <code>false</code>, both current and staged Attribute is set.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

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
