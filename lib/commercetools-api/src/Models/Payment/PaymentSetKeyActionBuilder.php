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
 * @implements Builder<PaymentSetKeyAction>
 */
final class PaymentSetKeyActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Value to set.
     * If <code>key</code> is absent or <code>null</code>, the existing key, if any, will be removed.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $key
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
