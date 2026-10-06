<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\ShoppingList\ShoppingList;
use Commercetools\Api\Models\ShoppingList\ShoppingListBuilder;
use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AgentResponsesShoppingListSuccess>
 */
final class AgentResponsesShoppingListSuccessBuilder implements Builder
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

     * @var null|ShoppingList|ShoppingListBuilder
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
     * <p>The created <a href="ctp:api:type:ShoppingList">ShoppingList</a> in full commercetools REST representation.</p>
     *

     * @return null|ShoppingList
     */
    public function getEntity()
    {
        return $this->entity instanceof ShoppingListBuilder ? $this->entity->build() : $this->entity;
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
     * @param ?ShoppingList $entity
     * @return $this
     */
    public function withEntity(?ShoppingList $entity)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * @deprecated use withEntity() instead
     * @return $this
     */
    public function withEntityBuilder(?ShoppingListBuilder $entity)
    {
        $this->entity = $entity;

        return $this;
    }

    public function build(): AgentResponsesShoppingListSuccess
    {
        return new AgentResponsesShoppingListSuccessModel(
            $this->warnings,
            $this->threadId,
            $this->entity instanceof ShoppingListBuilder ? $this->entity->build() : $this->entity
        );
    }

    public static function of(): AgentResponsesShoppingListSuccessBuilder
    {
        return new self();
    }
}
