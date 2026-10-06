<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\ErrorObject;
use Commercetools\Api\Models\Error\ErrorObjectBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AgentQuoteRequestCreationFailedError>
 */
final class AgentQuoteRequestCreationFailedErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?string
     */
    private $cartId;

    /**
     * <p>Plain text description of the error.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

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
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
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


    public function build(): AgentQuoteRequestCreationFailedError
    {
        return new AgentQuoteRequestCreationFailedErrorModel(
            $this->message,
            $this->cartId
        );
    }

    public static function of(): AgentQuoteRequestCreationFailedErrorBuilder
    {
        return new self();
    }
}
