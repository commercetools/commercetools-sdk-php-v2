<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartSetRecurringPaymentStrategyActionModel extends JsonObjectModel implements CartSetRecurringPaymentStrategyAction
{
    public const DISCRIMINATOR_VALUE = 'setRecurringPaymentStrategy';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $paymentStrategy;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $paymentStrategy = null,
        ?string $action = null
    ) {
        $this->paymentStrategy = $paymentStrategy;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New value to set.</p>
     *
     *
     * @return null|string
     */
    public function getPaymentStrategy()
    {
        if (is_null($this->paymentStrategy)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PAYMENT_STRATEGY);
            if (is_null($data)) {
                return null;
            }
            $this->paymentStrategy = (string) $data;
        }

        return $this->paymentStrategy;
    }


    /**
     * @param ?string $paymentStrategy
     */
    public function setPaymentStrategy(?string $paymentStrategy): void
    {
        $this->paymentStrategy = $paymentStrategy;
    }
}
