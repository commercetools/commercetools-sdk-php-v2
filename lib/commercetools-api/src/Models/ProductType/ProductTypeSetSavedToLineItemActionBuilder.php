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
 * @implements Builder<ProductTypeSetSavedToLineItemAction>
 */
final class ProductTypeSetSavedToLineItemActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $attributeName;

    /**

     * @var ?bool
     */
    private $savedToLineItem;

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
     * <p>Whether the Attribute value is copied onto a <a href="ctp:api:type:LineItem">LineItem</a> when the Product is added to a Cart.
     * See <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a> for details.</p>
     * <p>It has no effect if the Attribute already has the given value.</p>
     *

     * @return null|bool
     */
    public function getSavedToLineItem()
    {
        return $this->savedToLineItem;
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
     * @param ?bool $savedToLineItem
     * @return $this
     */
    public function withSavedToLineItem(?bool $savedToLineItem)
    {
        $this->savedToLineItem = $savedToLineItem;

        return $this;
    }


    public function build(): ProductTypeSetSavedToLineItemAction
    {
        return new ProductTypeSetSavedToLineItemActionModel(
            $this->attributeName,
            $this->savedToLineItem
        );
    }

    public static function of(): ProductTypeSetSavedToLineItemActionBuilder
    {
        return new self();
    }
}
