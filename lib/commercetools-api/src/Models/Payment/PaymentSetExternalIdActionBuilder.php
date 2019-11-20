<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentSetExternalIdAction>
 */
final class PaymentSetExternalIdActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function build(): PaymentSetExternalIdAction
    {
        return new PaymentSetExternalIdActionModel(
            $this->externalId
        );
    }

    public static function of(): PaymentSetExternalIdActionBuilder
    {
        return new self();
    }
}
