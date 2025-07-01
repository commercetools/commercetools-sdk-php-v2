<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodInfoMethodSetMessagePayload>
 */
final class PaymentMethodInfoMethodSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $method;

    /**

     * @var ?string
     */
    private $oldMethod;

    /**
     * <p>Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoMethodAction">Set MethodInfo Method</a> update action.</p>
     *

     * @return null|string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * <p>Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoMethodAction">Set MethodInfo Method</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldMethod()
    {
        return $this->oldMethod;
    }

    /**
     * @param ?string $method
     * @return $this
     */
    public function withMethod(?string $method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @param ?string $oldMethod
     * @return $this
     */
    public function withOldMethod(?string $oldMethod)
    {
        $this->oldMethod = $oldMethod;

        return $this;
    }


    public function build(): PaymentMethodInfoMethodSetMessagePayload
    {
        return new PaymentMethodInfoMethodSetMessagePayloadModel(
            $this->method,
            $this->oldMethod
        );
    }

    public static function of(): PaymentMethodInfoMethodSetMessagePayloadBuilder
    {
        return new self();
    }
}
