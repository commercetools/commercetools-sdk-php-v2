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
 * @implements Builder<GraphQLOutOfStockError>
 */
final class GraphQLOutOfStockErrorBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $lineItems;

    /**

     * @var ?array
     */
    private $skus;

    /**
     * <p>Unique identifiers of the Line Items that are out of stock.</p>
     *

     * @return null|array
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * <p>SKUs of the Line Items that are out of stock.</p>
     *

     * @return null|array
     */
    public function getSkus()
    {
        return $this->skus;
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
     * @param ?array $skus
     * @return $this
     */
    public function withSkus(?array $skus)
    {
        $this->skus = $skus;

        return $this;
    }


    public function build(): GraphQLOutOfStockError
    {
        return new GraphQLOutOfStockErrorModel(
            $this->lineItems,
            $this->skus
        );
    }

    public static function of(): GraphQLOutOfStockErrorBuilder
    {
        return new self();
    }
}
