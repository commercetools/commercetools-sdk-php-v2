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
 * @implements Builder<ProductTypeChangeLocalizedEnumValueOrderAction>
 */
final class ProductTypeChangeLocalizedEnumValueOrderActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $attributeName;

    /**

     * @var ?AttributeLocalizedEnumValueCollection
     */
    private $values;

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
     * <p>Values must be equal to the values of the Attribute enum values (except for the order). If not, an <a href="/errors#product-types-400-enum-values-must-match">EnumValuesMustMatch</a> error code will be returned.</p>
     *

     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
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
     * @param ?AttributeLocalizedEnumValueCollection $values
     * @return $this
     */
    public function withValues(?AttributeLocalizedEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }


    public function build(): ProductTypeChangeLocalizedEnumValueOrderAction
    {
        return new ProductTypeChangeLocalizedEnumValueOrderActionModel(
            $this->attributeName,
            $this->values
        );
    }

    public static function of(): ProductTypeChangeLocalizedEnumValueOrderActionBuilder
    {
        return new self();
    }
}
