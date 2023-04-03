<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLPriceChangedError>
 */
final class GraphQLPriceChangedErrorBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $lineItems;

    /**

     * @var ?bool
     */
    private $shipping;

    /**
     * <p>Unique identifiers of the Line Items for which the Price or <a href="ctp:api:type:TaxRate">TaxRate</a> has changed.</p>
     *

     * @return null|array
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * <p><code>true</code> if the <a href="ctp:api:type:ShippingRate">ShippingRate</a> has changed.</p>
     *

     * @return null|bool
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param ?array $lineItems
     * @return $this
     */
    public function withLineItems(?array $lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @param ?bool $shipping
     * @return $this
     */
    public function withShipping(?bool $shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }


    public function build(): GraphQLPriceChangedError
    {
        return new GraphQLPriceChangedErrorModel(
            $this->lineItems,
            $this->shipping
        );
    }

    public static function of(): GraphQLPriceChangedErrorBuilder
    {
        return new self();
    }
}
