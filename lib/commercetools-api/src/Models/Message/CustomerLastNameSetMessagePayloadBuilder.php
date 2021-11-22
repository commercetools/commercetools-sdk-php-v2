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
 * @implements Builder<CustomerLastNameSetMessagePayload>
 */
final class CustomerLastNameSetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $lastName;

    /**
     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param ?string $lastName
     * @return $this
     */
    public function withLastName(?string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }


    public function build(): CustomerLastNameSetMessagePayload
    {
        return new CustomerLastNameSetMessagePayloadModel(
            $this->lastName
        );
    }

    public static function of(): CustomerLastNameSetMessagePayloadBuilder
    {
        return new self();
    }
}
