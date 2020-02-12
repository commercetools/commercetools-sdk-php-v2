<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<MyCustomerSetDateOfBirthAction>
 */
final class MyCustomerSetDateOfBirthActionBuilder implements Builder
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
     * @return $this
     */
    public function withDateOfBirth(?DateTimeImmutable $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }


    public function build(): MyCustomerSetDateOfBirthAction
    {
        return new MyCustomerSetDateOfBirthActionModel(
            $this->dateOfBirth
        );
    }

    public static function of(): MyCustomerSetDateOfBirthActionBuilder
    {
        return new self();
    }
}
