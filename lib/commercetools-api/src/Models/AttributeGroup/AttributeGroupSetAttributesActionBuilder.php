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
 * @implements Builder<AttributeGroupSetAttributesAction>
 */
final class AttributeGroupSetAttributesActionBuilder implements Builder
{
    /**

     * @var ?AttributeReferenceCollection
     */
    private $attributes;

    /**
     * <p>New unique values to set.</p>
     *

     * @return null|AttributeReferenceCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param ?AttributeReferenceCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeReferenceCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }


    public function build(): AttributeGroupSetAttributesAction
    {
        return new AttributeGroupSetAttributesActionModel(
            $this->attributes
        );
    }

    public static function of(): AttributeGroupSetAttributesActionBuilder
    {
        return new self();
    }
}
