<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentSetKeyAction>
 */
final class PaymentSetKeyActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * <p>User-specific unique identifier for the payment (max.
     * 256 characters).
     * If not provided an existing key will be removed.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function build(): PaymentSetKeyAction
    {
        return new PaymentSetKeyActionModel(
            $this->key
        );
    }

    public static function of(): PaymentSetKeyActionBuilder
    {
        return new self();
    }
}
