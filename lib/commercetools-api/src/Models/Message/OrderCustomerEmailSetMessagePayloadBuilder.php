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
    private $type;

    /**
     * @var ?string
     */
    private $oldEmail;

    /**
     * @var ?string
     */
    private $email;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

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
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
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
            $this->type,
            $this->oldEmail,
            $this->email
        );
    }

    public static function of(): OrderCustomerEmailSetMessagePayloadBuilder
    {
        return new self();
    }
}
