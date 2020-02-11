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
 * @implements Builder<CartRemoveCustomLineItemAction>
 */
final class CartRemoveCustomLineItemActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }


    public function build(): CartRemoveCustomLineItemAction
    {
        return new CartRemoveCustomLineItemActionModel(
            $this->customLineItemId
        );
    }

    public static function of(): CartRemoveCustomLineItemActionBuilder
    {
        return new self();
    }
}
