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
 * @implements Builder<PaymentSetMethodInfoMethodAction>
 */
final class PaymentSetMethodInfoMethodActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $method;

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param ?string $method
     * @return $this
     */
    public function withMethod(?string $method)
    {
        $this->method = $method;

        return $this;
    }


    public function build(): PaymentSetMethodInfoMethodAction
    {
        return new PaymentSetMethodInfoMethodActionModel(
            $this->method
        );
    }

    public static function of(): PaymentSetMethodInfoMethodActionBuilder
    {
        return new self();
    }
}
