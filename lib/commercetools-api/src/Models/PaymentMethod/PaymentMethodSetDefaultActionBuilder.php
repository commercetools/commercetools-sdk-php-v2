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
 * @implements Builder<PaymentMethodSetDefaultAction>
 */
final class PaymentMethodSetDefaultActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $default;

    /**
     * <p>Value to set.</p>
     *

     * @return null|bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param ?bool $default
     * @return $this
     */
    public function withDefault(?bool $default)
    {
        $this->default = $default;

        return $this;
    }


    public function build(): PaymentMethodSetDefaultAction
    {
        return new PaymentMethodSetDefaultActionModel(
            $this->default
        );
    }

    public static function of(): PaymentMethodSetDefaultActionBuilder
    {
        return new self();
    }
}
