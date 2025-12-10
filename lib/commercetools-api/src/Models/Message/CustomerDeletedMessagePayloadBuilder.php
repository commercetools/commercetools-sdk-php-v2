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
 * @implements Builder<CustomerDeletedMessagePayload>
 */
final class CustomerDeletedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $email;

    /**
     * <p>The email address of the Customer that was deleted.</p>
     *

     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
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


    public function build(): CustomerDeletedMessagePayload
    {
        return new CustomerDeletedMessagePayloadModel(
            $this->email
        );
    }

    public static function of(): CustomerDeletedMessagePayloadBuilder
    {
        return new self();
    }
}
