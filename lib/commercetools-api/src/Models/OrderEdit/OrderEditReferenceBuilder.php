<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderEditReference>
 */
final class OrderEditReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $typeId;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var OrderEdit|?OrderEditBuilder
     */
    private $obj;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
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
     * @return $this
     */
    public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?OrderEdit $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
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
            $this->typeId,
            $this->id,
            ($this->obj instanceof OrderEditBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): OrderEditReferenceBuilder
    {
        return new self();
    }
}
