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
     * <p>New user-defined name of the Attribute that must be unique within the ProductType.</p>
     * <p>To use the same <code>name</code> in multiple ProductTypes, each AttributeDefinition must have the same <code>type</code>; otherwise, an <a href="ctp:api:type:AttributeDefinitionTypeConflictError">AttributeDefinitionTypeConflict</a> error is returned.
     * For <code>enum</code> or <code>lenum</code> Types and sets of these AttributeTypes, the enum values can be different for each ProductType.</p>
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
