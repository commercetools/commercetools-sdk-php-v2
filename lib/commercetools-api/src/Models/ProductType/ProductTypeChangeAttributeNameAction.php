<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeChangeAttributeNameAction extends ProductTypeUpdateAction
{
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_NEW_ATTRIBUTE_NAME = 'newAttributeName';

    /**
     * <p>Name of the AttributeDefinition to update.</p>
     *
     * @return null|string
     */
    public function getAttributeName();

    /**
     * <p>New user-defined name of the Attribute that is unique with the <a href="ctp:api:type:Project">Project</a>.
     * When using the same <code>name</code> for an Attribute in two or more ProductTypes all fields of the AttributeDefinition of this Attribute need to be the same across the ProductTypes, otherwise an <a href="ctp:api:type:AttributeDefinitionAlreadyExistsError">AttributeDefinitionAlreadyExistsError</a> will be returned.
     * An exception to this are the values of an <code>enum</code> or <code>lenum</code> type and sets thereof.</p>
     *
     * @return null|string
     */
    public function getNewAttributeName();

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;

    /**
     * @param ?string $newAttributeName
     */
    public function setNewAttributeName(?string $newAttributeName): void;
}
