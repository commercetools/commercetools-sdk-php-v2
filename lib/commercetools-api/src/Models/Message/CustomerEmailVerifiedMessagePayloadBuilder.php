<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerEmailVerifiedMessagePayload>
 */
final class CustomerEmailVerifiedMessagePayloadBuilder implements Builder
{
    public function build(): CustomerEmailVerifiedMessagePayload
    {
        return new CustomerEmailVerifiedMessagePayloadModel(
        );
    }

    public static function of(): CustomerEmailVerifiedMessagePayloadBuilder
    {
        return new self();
    }
}
