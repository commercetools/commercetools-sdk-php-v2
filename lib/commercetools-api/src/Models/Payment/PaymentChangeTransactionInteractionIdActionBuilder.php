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
 * @implements Builder<PaymentChangeTransactionInteractionIdAction>
 */
final class PaymentChangeTransactionInteractionIdActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $transactionId;

    /**

     * @var ?string
     */
    private $interactionId;

    /**

     * @return null|string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**

     * @return null|string
     */
    public function getInteractionId()
    {
        return $this->interactionId;
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
     * @param ?string $interactionId
     * @return $this
     */
    public function withInteractionId(?string $interactionId)
    {
        $this->interactionId = $interactionId;

        return $this;
    }


    public function build(): PaymentChangeTransactionInteractionIdAction
    {
        return new PaymentChangeTransactionInteractionIdActionModel(
            $this->transactionId,
            $this->interactionId
        );
    }

    public static function of(): PaymentChangeTransactionInteractionIdActionBuilder
    {
        return new self();
    }
}
