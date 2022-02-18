<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Unique ID of the referenced <a href="ctp:api:type:Type">Type</a>.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded Type.
     * Only present in responses to requests with <a href="ctp:api:type:Expansion">Reference Expansion</a> for Types.</p>
     *
     * @return null|Type
     */
    public function getObj()
    {
        return $this->obj instanceof TypeBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?Type $obj
     * @return $this
     */
    public function withObj(?Type $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
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
