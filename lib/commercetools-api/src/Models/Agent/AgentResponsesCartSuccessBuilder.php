<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartBuilder;
use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AgentResponsesCartSuccess>
 */
final class AgentResponsesCartSuccessBuilder implements Builder
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

     * @var null|Cart|CartBuilder
     */
    private $entity;

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
     * <p>The created <a href="ctp:api:type:Cart">Cart</a> in full commercetools REST representation.</p>
     *

     * @return null|Cart
     */
    public function getEntity()
    {
        return $this->entity instanceof CartBuilder ? $this->entity->build() : $this->entity;
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
     * @param ?Cart $entity
     * @return $this
     */
    public function withEntity(?Cart $entity)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * @deprecated use withEntity() instead
     * @return $this
     */
    public function withEntityBuilder(?CartBuilder $entity)
    {
        $this->entity = $entity;

        return $this;
    }

    public function build(): AgentResponsesCartSuccess
    {
        return new AgentResponsesCartSuccessModel(
            $this->warnings,
            $this->threadId,
            $this->entity instanceof CartBuilder ? $this->entity->build() : $this->entity
        );
    }

    public static function of(): AgentResponsesCartSuccessBuilder
    {
        return new self();
    }
}
