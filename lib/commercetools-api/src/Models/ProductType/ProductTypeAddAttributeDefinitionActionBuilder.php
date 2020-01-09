<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeAddAttributeDefinitionAction>
 */
final class ProductTypeAddAttributeDefinitionActionBuilder implements Builder
{
    /**
     * @var null|AttributeDefinitionDraft|AttributeDefinitionDraftBuilder
     */
    private $attribute;

    /**
     * @return null|AttributeDefinitionDraft
     */
    public function getAttribute()
    {
        return $this->attribute instanceof AttributeDefinitionDraftBuilder ? $this->attribute->build() : $this->attribute;
    }

    /**
     * @return $this
     */
    public function withAttribute(?AttributeDefinitionDraft $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributeBuilder(?AttributeDefinitionDraftBuilder $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    public function build(): ProductTypeAddAttributeDefinitionAction
    {
        return new ProductTypeAddAttributeDefinitionActionModel(
            $this->attribute instanceof AttributeDefinitionDraftBuilder ? $this->attribute->build() : $this->attribute
        );
    }

    public static function of(): ProductTypeAddAttributeDefinitionActionBuilder
    {
        return new self();
    }
}
