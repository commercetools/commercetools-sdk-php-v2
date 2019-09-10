<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentReference>
 */
final class PaymentReferenceBuilder implements Builder
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
     * @var Payment|?PaymentBuilder
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
     * @return null|Payment
     */
    public function getObj()
    {
        return $this->obj instanceof PaymentBuilder ? $this->obj->build() : $this->obj;
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
    public function withObj(?Payment $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
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
            $this->typeId,
            $this->id,
            ($this->obj instanceof PaymentBuilder ? $this->obj->build() : $this->obj)
        );
    }

    public static function of(): PaymentReferenceBuilder
    {
        return new self();
    }
}
