<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<CustomerSetDateOfBirthAction>
 */
final class CustomerSetDateOfBirthActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

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
    public function getAction()
    {
        return $this->action;
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
    public function withAction(?string $action)
    {
        $this->action = $action;

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

    public function build(): CustomerSetDateOfBirthAction
    {
        return new CustomerSetDateOfBirthActionModel(
            $this->action,
            $this->dateOfBirth
        );
    }

    public static function of(): CustomerSetDateOfBirthActionBuilder
    {
        return new self();
    }
}
