<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountGroupReference>
 */
final class DiscountGroupReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|DiscountGroup|DiscountGroupBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:DiscountGroup">DiscountGroup</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded DiscountGroup.
     * Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for DiscountGroups.</p>
     *

     * @return null|DiscountGroup
     */
    public function getObj()
    {
        return $this->obj instanceof DiscountGroupBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?DiscountGroup $obj
     * @return $this
     */
    public function withObj(?DiscountGroup $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?DiscountGroupBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): DiscountGroupReference
    {
        return new DiscountGroupReferenceModel(
            $this->id,
            $this->obj instanceof DiscountGroupBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): DiscountGroupReferenceBuilder
    {
        return new self();
    }
}
