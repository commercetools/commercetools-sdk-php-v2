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
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<QuoteRequestLabel>
 */
final class QuoteRequestLabelBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $customer;

    /**
     * <p>User-defined unique identifier of the Quote Request.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who raised the Quote Request.</p>
     *

     * @return null|Reference
     */
    public function getCustomer()
    {
        return $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?Reference $customer
     * @return $this
     */
    public function withCustomer(?Reference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?ReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): QuoteRequestLabel
    {
        return new QuoteRequestLabelModel(
            $this->key,
            $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer
        );
    }

    public static function of(): QuoteRequestLabelBuilder
    {
        return new self();
    }
}
