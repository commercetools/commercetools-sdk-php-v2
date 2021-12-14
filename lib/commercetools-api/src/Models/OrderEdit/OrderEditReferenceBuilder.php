<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderEditReference>
 */
final class OrderEditReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|OrderEdit|OrderEditBuilder
     */
    private $obj;

    /**
     * <p>Unique ID of the referenced resource.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|OrderEdit
     */
    public function getObj()
    {
        return $this->obj instanceof OrderEditBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?OrderEdit $obj
     * @return $this
     */
    public function withObj(?OrderEdit $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?OrderEditBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): OrderEditReference
    {
        return new OrderEditReferenceModel(
            $this->id,
            $this->obj instanceof OrderEditBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): OrderEditReferenceBuilder
    {
        return new self();
    }
}
