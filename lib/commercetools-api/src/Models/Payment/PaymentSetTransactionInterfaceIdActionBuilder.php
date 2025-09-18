<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentSetTransactionInterfaceIdAction>
 */
final class PaymentSetTransactionInterfaceIdActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $transactionId;

    /**

     * @var ?string
     */
    private $interfaceId;

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
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP) in the current transaction. It must be unique across all transactions.
     * If <code>interfaceId</code> is absent, this field will be removed from the specified Transaction, if it exists.</p>
     *

     * @return null|string
     */
    public function getInterfaceId()
    {
        return $this->interfaceId;
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
     * @param ?string $interfaceId
     * @return $this
     */
    public function withInterfaceId(?string $interfaceId)
    {
        $this->interfaceId = $interfaceId;

        return $this;
    }


    public function build(): PaymentSetTransactionInterfaceIdAction
    {
        return new PaymentSetTransactionInterfaceIdActionModel(
            $this->transactionId,
            $this->interfaceId
        );
    }

    public static function of(): PaymentSetTransactionInterfaceIdActionBuilder
    {
        return new self();
    }
}
