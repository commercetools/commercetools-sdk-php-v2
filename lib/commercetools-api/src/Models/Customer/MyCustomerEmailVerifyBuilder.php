<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCustomerEmailVerify>
 */
final class MyCustomerEmailVerifyBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $tokenValue;

    /**
     * <p>Value of the token to verify Customer email.</p>
     *

     * @return null|string
     */
    public function getTokenValue()
    {
        return $this->tokenValue;
    }

    /**
     * @param ?string $tokenValue
     * @return $this
     */
    public function withTokenValue(?string $tokenValue)
    {
        $this->tokenValue = $tokenValue;

        return $this;
    }


    public function build(): MyCustomerEmailVerify
    {
        return new MyCustomerEmailVerifyModel(
            $this->tokenValue
        );
    }

    public static function of(): MyCustomerEmailVerifyBuilder
    {
        return new self();
    }
}
