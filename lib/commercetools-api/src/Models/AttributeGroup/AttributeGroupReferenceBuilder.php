<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeGroupReference>
 */
final class AttributeGroupReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|AttributeGroup|AttributeGroupBuilder
     */
    private $obj;

    /**
     * <p>Platform-generated unique identifier of the referenced <a href="ctp:api:type:AttributeGroup">AttributeGroup</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded AttributeGroup. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for AttributeGroup.</p>
     *

     * @return null|AttributeGroup
     */
    public function getObj()
    {
        return $this->obj instanceof AttributeGroupBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?AttributeGroup $obj
     * @return $this
     */
    public function withObj(?AttributeGroup $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?AttributeGroupBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): AttributeGroupReference
    {
        return new AttributeGroupReferenceModel(
            $this->id,
            $this->obj instanceof AttributeGroupBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): AttributeGroupReferenceBuilder
    {
        return new self();
    }
}
