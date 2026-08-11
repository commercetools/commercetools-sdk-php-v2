<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantReference>
 */
final class VariantReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|Variant|VariantBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded Variant. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Variants.</p>
     *

     * @return null|Variant
     */
    public function getObj()
    {
        return $this->obj instanceof VariantBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?Variant $obj
     * @return $this
     */
    public function withObj(?Variant $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?VariantBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): VariantReference
    {
        return new VariantReferenceModel(
            $this->id,
            $this->obj instanceof VariantBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): VariantReferenceBuilder
    {
        return new self();
    }
}
