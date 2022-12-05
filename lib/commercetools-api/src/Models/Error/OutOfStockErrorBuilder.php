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
 * @implements Builder<OutOfStockError>
 */
final class OutOfStockErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?array
     */
    private $lineItems;

    /**

     * @var ?array
     */
    private $skus;

    /**
     * <p><code>&quot;Some line items are out of stock at the time of placing the order: $itemSku.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

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
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
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


    public function build(): OutOfStockError
    {
        return new OutOfStockErrorModel(
            $this->message,
            $this->lineItems,
            $this->skus
        );
    }

    public static function of(): OutOfStockErrorBuilder
    {
        return new self();
    }
}
