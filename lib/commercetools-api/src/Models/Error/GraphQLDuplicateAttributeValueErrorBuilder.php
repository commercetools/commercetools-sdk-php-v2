<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\Attribute;
use Commercetools\Api\Models\Product\AttributeBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLDuplicateAttributeValueError>
 */
final class GraphQLDuplicateAttributeValueErrorBuilder implements Builder
{
    /**

     * @var null|Attribute|AttributeBuilder
     */
    private $attribute;

    /**
     * <p>Conflicting Attributes.</p>
     *

     * @return null|Attribute
     */
    public function getAttribute()
    {
        return $this->attribute instanceof AttributeBuilder ? $this->attribute->build() : $this->attribute;
    }

    /**
     * @param ?Attribute $attribute
     * @return $this
     */
    public function withAttribute(?Attribute $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * @deprecated use withAttribute() instead
     * @return $this
     */
    public function withAttributeBuilder(?AttributeBuilder $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    public function build(): GraphQLDuplicateAttributeValueError
    {
        return new GraphQLDuplicateAttributeValueErrorModel(
            $this->attribute instanceof AttributeBuilder ? $this->attribute->build() : $this->attribute
        );
    }

    public static function of(): GraphQLDuplicateAttributeValueErrorBuilder
    {
        return new self();
    }
}
