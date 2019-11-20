<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentSetAnonymousIdAction>
 */
final class PaymentSetAnonymousIdActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $anonymousId;

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

        return $this;
    }

    public function build(): PaymentSetAnonymousIdAction
    {
        return new PaymentSetAnonymousIdActionModel(
            $this->anonymousId
        );
    }

    public static function of(): PaymentSetAnonymousIdActionBuilder
    {
        return new self();
    }
}
