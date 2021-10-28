<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentReference>
 */
final class PaymentReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|Payment|PaymentBuilder
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
     * @return null|Payment
     */
    public function getObj()
    {
        return $this->obj instanceof PaymentBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?Payment $obj
     * @return $this
     */
    public function withObj(?Payment $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?PaymentBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): PaymentReference
    {
        return new PaymentReferenceModel(
            $this->id,
            $this->obj instanceof PaymentBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): PaymentReferenceBuilder
    {
        return new self();
    }
}
