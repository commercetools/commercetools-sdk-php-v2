<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartChangeCustomLineItemPriceModeAction>
 */
final class CartChangeCustomLineItemPriceModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $customLineItemId;

    /**

     * @var ?string
     */
    private $customLineItemKey;

    /**

     * @var ?string
     */
    private $mode;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemKey()
    {
        return $this->customLineItemKey;
    }

    /**
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param ?string $customLineItemId
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @param ?string $customLineItemKey
     * @return $this
     */
    public function withCustomLineItemKey(?string $customLineItemKey)
    {
        $this->customLineItemKey = $customLineItemKey;

        return $this;
    }

    /**
     * @param ?string $mode
     * @return $this
     */
    public function withMode(?string $mode)
    {
        $this->mode = $mode;

        return $this;
    }


    public function build(): CartChangeCustomLineItemPriceModeAction
    {
        return new CartChangeCustomLineItemPriceModeActionModel(
            $this->customLineItemId,
            $this->customLineItemKey,
            $this->mode
        );
    }

    public static function of(): CartChangeCustomLineItemPriceModeActionBuilder
    {
        return new self();
    }
}
