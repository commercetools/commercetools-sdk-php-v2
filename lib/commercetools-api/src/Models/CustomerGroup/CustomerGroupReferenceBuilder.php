<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerGroupReference>
 */
final class CustomerGroupReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|CustomerGroup|CustomerGroupBuilder
     */
    private $obj;

    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded Customer Group. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Customer Groups.</p>
     *
     * @return null|CustomerGroup
     */
    public function getObj()
    {
        return $this->obj instanceof CustomerGroupBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?CustomerGroup $obj
     * @return $this
     */
    public function withObj(?CustomerGroup $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?CustomerGroupBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): CustomerGroupReference
    {
        return new CustomerGroupReferenceModel(
            $this->id,
            $this->obj instanceof CustomerGroupBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): CustomerGroupReferenceBuilder
    {
        return new self();
    }
}
