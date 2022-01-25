<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSelectionReference>
 */
final class ProductSelectionReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|ProductSelection|ProductSelectionBuilder
     */
    private $obj;

    /**
     * <p>Unique ID of the Product Selection.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded Product Selection. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Product Selection.</p>
     *
     * @return null|ProductSelection
     */
    public function getObj()
    {
        return $this->obj instanceof ProductSelectionBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?ProductSelection $obj
     * @return $this
     */
    public function withObj(?ProductSelection $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?ProductSelectionBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ProductSelectionReference
    {
        return new ProductSelectionReferenceModel(
            $this->id,
            $this->obj instanceof ProductSelectionBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ProductSelectionReferenceBuilder
    {
        return new self();
    }
}
