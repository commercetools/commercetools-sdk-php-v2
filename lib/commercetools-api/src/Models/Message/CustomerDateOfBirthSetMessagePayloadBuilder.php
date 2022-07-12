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
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<CustomerDateOfBirthSetMessagePayload>
 */
final class CustomerDateOfBirthSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $dateOfBirth;

    /**

     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param ?DateTimeImmutable $dateOfBirth
     * @return $this
     */
    public function withDateOfBirth(?DateTimeImmutable $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }


    public function build(): CustomerDateOfBirthSetMessagePayload
    {
        return new CustomerDateOfBirthSetMessagePayloadModel(
            $this->dateOfBirth
        );
    }

    public static function of(): CustomerDateOfBirthSetMessagePayloadBuilder
    {
        return new self();
    }
}
