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
 * @implements Builder<PaymentTransactionInterfaceIdSetMessagePayload>
 */
final class PaymentTransactionInterfaceIdSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $transactionId;

    /**

     * @var ?string
     */
    private $newInterfaceId;

    /**

     * @var ?string
     */
    private $oldInterfaceId;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Transaction">Transaction</a>.</p>
     *

     * @return null|string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP) after <a href="ctp:api:type:PaymentSetTransactionInterfaceIdAction">Set Transaction InterfaceId</a> update action.</p>
     *

     * @return null|string
     */
    public function getNewInterfaceId()
    {
        return $this->newInterfaceId;
    }

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP) before the <a href="ctp:api:type:PaymentSetTransactionInterfaceIdAction">Set Transaction InterfaceId</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldInterfaceId()
    {
        return $this->oldInterfaceId;
    }

    /**
     * @param ?string $transactionId
     * @return $this
     */
    public function withTransactionId(?string $transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * @param ?string $newInterfaceId
     * @return $this
     */
    public function withNewInterfaceId(?string $newInterfaceId)
    {
        $this->newInterfaceId = $newInterfaceId;

        return $this;
    }

    /**
     * @param ?string $oldInterfaceId
     * @return $this
     */
    public function withOldInterfaceId(?string $oldInterfaceId)
    {
        $this->oldInterfaceId = $oldInterfaceId;

        return $this;
    }


    public function build(): PaymentTransactionInterfaceIdSetMessagePayload
    {
        return new PaymentTransactionInterfaceIdSetMessagePayloadModel(
            $this->transactionId,
            $this->newInterfaceId,
            $this->oldInterfaceId
        );
    }

    public static function of(): PaymentTransactionInterfaceIdSetMessagePayloadBuilder
    {
        return new self();
    }
}
