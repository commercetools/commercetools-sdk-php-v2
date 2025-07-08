<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurrencePolicyReference>
 */
final class RecurrencePolicyReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|RecurrencePolicy|RecurrencePolicyBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:RecurrencePolicy">RecurrencePolicy</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded RecurrencePolicy.
     * Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for RecurrencePolicies.</p>
     *

     * @return null|RecurrencePolicy
     */
    public function getObj()
    {
        return $this->obj instanceof RecurrencePolicyBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?RecurrencePolicy $obj
     * @return $this
     */
    public function withObj(?RecurrencePolicy $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?RecurrencePolicyBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): RecurrencePolicyReference
    {
        return new RecurrencePolicyReferenceModel(
            $this->id,
            $this->obj instanceof RecurrencePolicyBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): RecurrencePolicyReferenceBuilder
    {
        return new self();
    }
}
