<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeGroupAddAttributeAction>
 */
final class AttributeGroupAddAttributeActionBuilder implements Builder
{
    /**

     * @var null|AttributeReference|AttributeReferenceBuilder
     */
    private $attribute;

    /**
     * <p>Value to add.</p>
     *

     * @return null|AttributeReference
     */
    public function getAttribute()
    {
        return $this->attribute instanceof AttributeReferenceBuilder ? $this->attribute->build() : $this->attribute;
    }

    /**
     * @param ?AttributeReference $attribute
     * @return $this
     */
    public function withAttribute(?AttributeReference $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * @deprecated use withAttribute() instead
     * @return $this
     */
    public function withAttributeBuilder(?AttributeReferenceBuilder $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    public function build(): AttributeGroupAddAttributeAction
    {
        return new AttributeGroupAddAttributeActionModel(
            $this->attribute instanceof AttributeReferenceBuilder ? $this->attribute->build() : $this->attribute
        );
    }

    public static function of(): AttributeGroupAddAttributeActionBuilder
    {
        return new self();
    }
}
