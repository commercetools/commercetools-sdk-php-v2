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
 * @implements Builder<CartSetAnonymousIdAction>
 */
final class CartSetAnonymousIdActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $anonymousId;

    /**
     * <p>If not set, any existing anonymous ID will be removed.</p>
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


    public function build(): CartSetAnonymousIdAction
    {
        return new CartSetAnonymousIdActionModel(
            $this->anonymousId
        );
    }

    public static function of(): CartSetAnonymousIdActionBuilder
    {
        return new self();
    }
}
