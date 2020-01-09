<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TypeReference>
 */
final class TypeReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|Type|TypeBuilder
     */
    private $obj;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|Type
     */
    public function getObj()
    {
        return $this->obj instanceof TypeBuilder ? $this->obj->build() : $this->obj;
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
    public function withObj(?Type $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?TypeBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): TypeReference
    {
        return new TypeReferenceModel(
            $this->id,
            $this->obj instanceof TypeBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): TypeReferenceBuilder
    {
        return new self();
    }
}
