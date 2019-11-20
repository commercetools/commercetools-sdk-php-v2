<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderCustomerEmailSetMessagePayload>
 */
final class OrderCustomerEmailSetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $oldEmail;

    /**
     * @var ?string
     */
    private $email;

    /**
     * @return null|string
     */
    public function getOldEmail()
    {
        return $this->oldEmail;
    }

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
    public function withOldEmail(?string $oldEmail)
    {
        $this->oldEmail = $oldEmail;

        return $this;
    }

    /**
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    public function build(): OrderCustomerEmailSetMessagePayload
    {
        return new OrderCustomerEmailSetMessagePayloadModel(
            $this->oldEmail,
            $this->email
        );
    }

    public static function of(): OrderCustomerEmailSetMessagePayloadBuilder
    {
        return new self();
    }
}
