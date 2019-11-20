<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerEmailChangedMessagePayload>
 */
final class CustomerEmailChangedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $email;

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    public function build(): CustomerEmailChangedMessagePayload
    {
        return new CustomerEmailChangedMessagePayloadModel(
            $this->email
        );
    }

    public static function of(): CustomerEmailChangedMessagePayloadBuilder
    {
        return new self();
    }
}
