<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderCustomerEmailSetMessagePayload>
 */
final class OrderCustomerEmailSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $email;

    /**

     * @var ?string
     */
    private $oldEmail;

    /**

     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**

     * @return null|string
     */
    public function getOldEmail()
    {
        return $this->oldEmail;
    }

    /**
     * @param ?string $email
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param ?string $oldEmail
     * @return $this
     */
    public function withOldEmail(?string $oldEmail)
    {
        $this->oldEmail = $oldEmail;

        return $this;
    }


    public function build(): OrderCustomerEmailSetMessagePayload
    {
        return new OrderCustomerEmailSetMessagePayloadModel(
            $this->email,
            $this->oldEmail
        );
    }

    public static function of(): OrderCustomerEmailSetMessagePayloadBuilder
    {
        return new self();
    }
}
