<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShoppingListSetAnonymousIdAction>
 */
final class ShoppingListSetAnonymousIdActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $anonymousId;

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * @param ?string $anonymousId
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

        return $this;
    }


    public function build(): ShoppingListSetAnonymousIdAction
    {
        return new ShoppingListSetAnonymousIdActionModel(
            $this->anonymousId
        );
    }

    public static function of(): ShoppingListSetAnonymousIdActionBuilder
    {
        return new self();
    }
}
