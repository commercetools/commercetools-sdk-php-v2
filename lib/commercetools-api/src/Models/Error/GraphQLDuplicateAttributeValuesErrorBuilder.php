<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLDuplicateAttributeValuesError>
 */
final class GraphQLDuplicateAttributeValuesErrorBuilder implements Builder
{
    /**

     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * <p>Conflicting Attributes.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param ?AttributeCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }


    public function build(): GraphQLDuplicateAttributeValuesError
    {
        return new GraphQLDuplicateAttributeValuesErrorModel(
            $this->attributes
        );
    }

    public static function of(): GraphQLDuplicateAttributeValuesErrorBuilder
    {
        return new self();
    }
}
