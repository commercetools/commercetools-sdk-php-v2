<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTypeChangeAttributeNameAction>
 */
final class ProductTypeChangeAttributeNameActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $attributeName;

    /**

     * @var ?string
     */
    private $newAttributeName;

    /**
     * <p>Name of the AttributeDefinition to update.</p>
     *

     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * <p>New user-defined name of the Attribute that must be unique within the ProductType.</p>
     * <p>To use the same <code>name</code> in multiple ProductTypes, each AttributeDefinition must have the same <code>type</code>; otherwise, an <a href="ctp:api:type:AttributeDefinitionTypeConflictError">AttributeDefinitionTypeConflict</a> error is returned.
     * For <code>enum</code> or <code>lenum</code> Types and sets of these AttributeTypes, the enum values can be different for each ProductType.</p>
     *

     * @return null|string
     */
    public function getNewAttributeName()
    {
        return $this->newAttributeName;
    }

    /**
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @param ?string $newAttributeName
     * @return $this
     */
    public function withNewAttributeName(?string $newAttributeName)
    {
        $this->newAttributeName = $newAttributeName;

        return $this;
    }


    public function build(): ProductTypeChangeAttributeNameAction
    {
        return new ProductTypeChangeAttributeNameActionModel(
            $this->attributeName,
            $this->newAttributeName
        );
    }

    public static function of(): ProductTypeChangeAttributeNameActionBuilder
    {
        return new self();
    }
}
