<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryReference>
 */
final class CategoryReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|Category|CategoryBuilder
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
     * @return null|Category
     */
    public function getObj()
    {
        return $this->obj instanceof CategoryBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?Category $obj
     * @return $this
     */
    public function withObj(?Category $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?CategoryBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): CategoryReference
    {
        return new CategoryReferenceModel(
            $this->id,
            $this->obj instanceof CategoryBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): CategoryReferenceBuilder
    {
        return new self();
    }
}
