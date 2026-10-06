<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\QuoteRequest\QuoteRequest;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestBuilder;
use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AgentResponsesQuoteRequestSuccess>
 */
final class AgentResponsesQuoteRequestSuccessBuilder implements Builder
{
    /**

     * @var ?WarningObjectCollection
     */
    private $warnings;

    /**

     * @var ?string
     */
    private $threadId;

    /**

     * @var null|QuoteRequest|QuoteRequestBuilder
     */
    private $entity;

    /**

     * @var ?string
     */
    private $cartId;

    /**
     * <p>Non-fatal issues encountered while processing the request. Present only when at least one warning is returned.</p>
     *

     * @return null|WarningObjectCollection
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * <p>Identifier of the workflow run that produced this response.</p>
     *

     * @return null|string
     */
    public function getThreadId()
    {
        return $this->threadId;
    }

    /**
     * <p>The created <a href="ctp:api:type:QuoteRequest">QuoteRequest</a> in full commercetools REST representation.</p>
     *

     * @return null|QuoteRequest
     */
    public function getEntity()
    {
        return $this->entity instanceof QuoteRequestBuilder ? $this->entity->build() : $this->entity;
    }

    /**
     * <p><code>id</code> of the underlying <a href="ctp:api:type:Cart">Cart</a>.</p>
     *

     * @return null|string
     */
    public function getCartId()
    {
        return $this->cartId;
    }

    /**
     * @param ?WarningObjectCollection $warnings
     * @return $this
     */
    public function withWarnings(?WarningObjectCollection $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * @param ?string $threadId
     * @return $this
     */
    public function withThreadId(?string $threadId)
    {
        $this->threadId = $threadId;

        return $this;
    }

    /**
     * @param ?QuoteRequest $entity
     * @return $this
     */
    public function withEntity(?QuoteRequest $entity)
    {
        $this->entity = $entity;

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

    /**
     * @deprecated use withEntity() instead
     * @return $this
     */
    public function withEntityBuilder(?QuoteRequestBuilder $entity)
    {
        $this->entity = $entity;

        return $this;
    }

    public function build(): AgentResponsesQuoteRequestSuccess
    {
        return new AgentResponsesQuoteRequestSuccessModel(
            $this->warnings,
            $this->threadId,
            $this->entity instanceof QuoteRequestBuilder ? $this->entity->build() : $this->entity,
            $this->cartId
        );
    }

    public static function of(): AgentResponsesQuoteRequestSuccessBuilder
    {
        return new self();
    }
}
