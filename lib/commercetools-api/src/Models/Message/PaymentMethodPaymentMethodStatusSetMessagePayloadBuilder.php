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
 * @implements Builder<PaymentMethodPaymentMethodStatusSetMessagePayload>
 */
final class PaymentMethodPaymentMethodStatusSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $status;

    /**

     * @var ?string
     */
    private $oldStatus;

    /**
     * <p>Status of the Payment Method after the <a href="ctp:api:type:PaymentMethodSetPaymentMethodStatusAction">Set PaymentMethodStatus</a> update action.</p>
     *

     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <p>Status of the Payment Method before the <a href="ctp:api:type:PaymentMethodSetPaymentMethodStatusAction">Set PaymentMethodStatus</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldStatus()
    {
        return $this->oldStatus;
    }

    /**
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param ?string $oldStatus
     * @return $this
     */
    public function withOldStatus(?string $oldStatus)
    {
        $this->oldStatus = $oldStatus;

        return $this;
    }


    public function build(): PaymentMethodPaymentMethodStatusSetMessagePayload
    {
        return new PaymentMethodPaymentMethodStatusSetMessagePayloadModel(
            $this->status,
            $this->oldStatus
        );
    }

    public static function of(): PaymentMethodPaymentMethodStatusSetMessagePayloadBuilder
    {
        return new self();
    }
}
