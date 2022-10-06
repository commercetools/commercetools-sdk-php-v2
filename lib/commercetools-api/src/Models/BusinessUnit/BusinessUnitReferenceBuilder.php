<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitReference>
 */
final class BusinessUnitReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|BusinessUnit|BusinessUnitBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:BusinessUnit">BusinessUnit</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded BusinessUnit. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for BusinessUnit.</p>
     *

     * @return null|BusinessUnit
     */
    public function getObj()
    {
        return $this->obj instanceof BusinessUnitBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?BusinessUnit $obj
     * @return $this
     */
    public function withObj(?BusinessUnit $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?BusinessUnitBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): BusinessUnitReference
    {
        return new BusinessUnitReferenceModel(
            $this->id,
            $this->obj instanceof BusinessUnitBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): BusinessUnitReferenceBuilder
    {
        return new self();
    }
}
