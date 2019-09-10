<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentTransactionStateChangedMessagePayload>
 */
final class PaymentTransactionStateChangedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?string
     */
    private $state;

    /**
     * @var ?string
     */
    private $transactionId;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return null|string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTransactionId(?string $transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    public function build(): PaymentTransactionStateChangedMessagePayload
    {
        return new PaymentTransactionStateChangedMessagePayloadModel(
            $this->type,
            $this->state,
            $this->transactionId
        );
    }

    public static function of(): PaymentTransactionStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
