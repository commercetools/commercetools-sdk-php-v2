<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodSetMethodAction>
 */
final class PaymentMethodSetMethodActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $method;

    /**
     * <p>New payment method—for example, a credit card or cash advance.
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


    public function build(): PaymentMethodSetMethodAction
    {
        return new PaymentMethodSetMethodActionModel(
            $this->method
        );
    }

    public static function of(): PaymentMethodSetMethodActionBuilder
    {
        return new self();
    }
}
