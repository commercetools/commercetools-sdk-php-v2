<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\GraphQLErrorObject;
use Commercetools\Api\Models\Error\GraphQLErrorObjectBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLAgentQuoteRequestCreationFailedError>
 */
final class GraphQLAgentQuoteRequestCreationFailedErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $cartId;

    /**
     * <p><code>id</code> of the orphaned Cart, for retry or cleanup.</p>
     *

     * @return null|string
     */
    public function getCartId()
    {
        return $this->cartId;
    }

    /**
     * @param ?string $cartId
     * @return $this
     */
    public function withCartId(?string $cartId)
    {
        $this->cartId = $cartId;

        return $this;
    }


    public function build(): GraphQLAgentQuoteRequestCreationFailedError
    {
        return new GraphQLAgentQuoteRequestCreationFailedErrorModel(
            $this->cartId
        );
    }

    public static function of(): GraphQLAgentQuoteRequestCreationFailedErrorBuilder
    {
        return new self();
    }
}
