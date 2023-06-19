<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerLabel>
 */
final class CustomerLabelBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $firstName;

    /**

     * @var ?string
     */
    private $lastName;

    /**

     * @var ?string
     */
    private $customerNumber;

    /**
     * <p>Given name (first name) of the Customer.</p>
     *

     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * <p>Family name (last name) of the Customer.</p>
     *

     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:Customer">Customer</a>.</p>
     *

     * @return null|string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * @param ?string $firstName
     * @return $this
     */
    public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
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

    /**
     * @param ?string $customerNumber
     * @return $this
     */
    public function withCustomerNumber(?string $customerNumber)
    {
        $this->customerNumber = $customerNumber;

        return $this;
    }


    public function build(): CustomerLabel
    {
        return new CustomerLabelModel(
            $this->firstName,
            $this->lastName,
            $this->customerNumber
        );
    }

    public static function of(): CustomerLabelBuilder
    {
        return new self();
    }
}
