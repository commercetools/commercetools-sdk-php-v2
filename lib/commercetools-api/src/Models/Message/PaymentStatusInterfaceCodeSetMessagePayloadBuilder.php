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
 * @implements Builder<PaymentStatusInterfaceCodeSetMessagePayload>
 */
final class PaymentStatusInterfaceCodeSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $paymentId;

    /**

     * @var ?string
     */
    private $interfaceCode;

    /**
     * <p>Unique identifier for the <a href="ctp:api:type:Payment">Payment</a> for which the <a href="ctp:api:type:PaymentSetStatusInterfaceCodeAction">Set StatusInterfaceCode</a> update action was applied.</p>
     *

     * @return null|string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * <p>The <code>interfaceCode</code> that was set during the <a href="ctp:api:type:PaymentSetStatusInterfaceCodeAction">Set StatusInterfaceCode</a> update action.</p>
     *

     * @return null|string
     */
    public function getInterfaceCode()
    {
        return $this->interfaceCode;
    }

    /**
     * @param ?string $paymentId
     * @return $this
     */
    public function withPaymentId(?string $paymentId)
    {
        $this->paymentId = $paymentId;

        return $this;
    }

    /**
     * @param ?string $interfaceCode
     * @return $this
     */
    public function withInterfaceCode(?string $interfaceCode)
    {
        $this->interfaceCode = $interfaceCode;

        return $this;
    }


    public function build(): PaymentStatusInterfaceCodeSetMessagePayload
    {
        return new PaymentStatusInterfaceCodeSetMessagePayloadModel(
            $this->paymentId,
            $this->interfaceCode
        );
    }

    public static function of(): PaymentStatusInterfaceCodeSetMessagePayloadBuilder
    {
        return new self();
    }
}
