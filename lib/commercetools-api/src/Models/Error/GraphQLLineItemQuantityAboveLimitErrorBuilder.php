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
 * @implements Builder<GraphQLLineItemQuantityAboveLimitError>
 */
final class GraphQLLineItemQuantityAboveLimitErrorBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var ?int
     */
    private $maxCartQuantity;

    /**

     * @var ?string
     */
    private $lineItem;

    /**
     * <p>The quantity that was requested.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>The maximum quantity allowed for this Line Item.</p>
     *

     * @return null|int
     */
    public function getMaxCartQuantity()
    {
        return $this->maxCartQuantity;
    }

    /**
     * <p>Reference to the Line Item that caused the error.</p>
     *

     * @return null|string
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?int $maxCartQuantity
     * @return $this
     */
    public function withMaxCartQuantity(?int $maxCartQuantity)
    {
        $this->maxCartQuantity = $maxCartQuantity;

        return $this;
    }

    /**
     * @param ?string $lineItem
     * @return $this
     */
    public function withLineItem(?string $lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }


    public function build(): GraphQLLineItemQuantityAboveLimitError
    {
        return new GraphQLLineItemQuantityAboveLimitErrorModel(
            $this->quantity,
            $this->maxCartQuantity,
            $this->lineItem
        );
    }

    public static function of(): GraphQLLineItemQuantityAboveLimitErrorBuilder
    {
        return new self();
    }
}
