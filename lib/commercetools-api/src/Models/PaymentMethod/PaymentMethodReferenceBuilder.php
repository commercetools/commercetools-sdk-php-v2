<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodReference>
 */
final class PaymentMethodReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|PaymentMethod|PaymentMethodBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:PaymentMethod">PaymentMethod</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded PaymentMethod. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for PaymentMethods.</p>
     *

     * @return null|PaymentMethod
     */
    public function getObj()
    {
        return $this->obj instanceof PaymentMethodBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?PaymentMethod $obj
     * @return $this
     */
    public function withObj(?PaymentMethod $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?PaymentMethodBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): PaymentMethodReference
    {
        return new PaymentMethodReferenceModel(
            $this->id,
            $this->obj instanceof PaymentMethodBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): PaymentMethodReferenceBuilder
    {
        return new self();
    }
}
