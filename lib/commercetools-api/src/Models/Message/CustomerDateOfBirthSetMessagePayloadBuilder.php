<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<CustomerDateOfBirthSetMessagePayload>
 */
final class CustomerDateOfBirthSetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?DateTimeImmutable
     */
    private $dateOfBirth;

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
     * @return null|DateTimeImmutable
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
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
    public function withDateOfBirth(?DateTimeImmutable $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function build(): CustomerDateOfBirthSetMessagePayload
    {
        return new CustomerDateOfBirthSetMessagePayloadModel(
            $this->type,
            $this->dateOfBirth
        );
    }

    public static function of(): CustomerDateOfBirthSetMessagePayloadBuilder
    {
        return new self();
    }
}
