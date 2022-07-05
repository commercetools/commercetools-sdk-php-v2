<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceReference>
 */
final class StandalonePriceReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|StandalonePrice|StandalonePriceBuilder
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
     * <p>Contains the representation of the expanded StandalonePrice. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for StandalonePrice.</p>
     *

     * @return null|StandalonePrice
     */
    public function getObj()
    {
        return $this->obj instanceof StandalonePriceBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?StandalonePrice $obj
     * @return $this
     */
    public function withObj(?StandalonePrice $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?StandalonePriceBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): StandalonePriceReference
    {
        return new StandalonePriceReferenceModel(
            $this->id,
            $this->obj instanceof StandalonePriceBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): StandalonePriceReferenceBuilder
    {
        return new self();
    }
}
