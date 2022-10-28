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
use stdClass;

/**
 * @implements Builder<MyBusinessUnitAssociateDraft>
 */
final class MyBusinessUnitAssociateDraftBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var null|MyCustomerDraft|MyCustomerDraftBuilder
     */
    private $customer;

    /**
     * <p>Expected version of the BusinessUnit on which the changes should be applied. If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p><a href="ctp:api:type:Customer">Customer</a> to create and assign to the Business Unit.</p>
     *

     * @return null|MyCustomerDraft
     */
    public function getCustomer()
    {
        return $this->customer instanceof MyCustomerDraftBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?MyCustomerDraft $customer
     * @return $this
     */
    public function withCustomer(?MyCustomerDraft $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?MyCustomerDraftBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): MyBusinessUnitAssociateDraft
    {
        return new MyBusinessUnitAssociateDraftModel(
            $this->version,
            $this->customer instanceof MyCustomerDraftBuilder ? $this->customer->build() : $this->customer
        );
    }

    public static function of(): MyBusinessUnitAssociateDraftBuilder
    {
        return new self();
    }
}
