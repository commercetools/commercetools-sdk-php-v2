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
 * @implements Builder<PaymentSetStatusInterfaceTextAction>
 */
final class PaymentSetStatusInterfaceTextActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $interfaceText;

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getInterfaceText()
    {
        return $this->interfaceText;
    }

    /**
     * @param ?string $interfaceText
     * @return $this
     */
    public function withInterfaceText(?string $interfaceText)
    {
        $this->interfaceText = $interfaceText;

        return $this;
    }


    public function build(): PaymentSetStatusInterfaceTextAction
    {
        return new PaymentSetStatusInterfaceTextActionModel(
            $this->interfaceText
        );
    }

    public static function of(): PaymentSetStatusInterfaceTextActionBuilder
    {
        return new self();
    }
}
