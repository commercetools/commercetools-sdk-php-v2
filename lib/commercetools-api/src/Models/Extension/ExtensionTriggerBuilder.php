<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionTrigger>
 */
final class ExtensionTriggerBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $resourceTypeId;

    /**

     * @var ?array
     */
    private $actions;

    /**

     * @var ?string
     */
    private $condition;

    /**
     * <p>The resource that triggers the Extension.</p>
     *

     * @return null|string
     */
    public function getResourceTypeId()
    {
        return $this->resourceTypeId;
    }

    /**
     * <p><code>Create</code> and <code>Update</code> requests are supported.</p>
     *

     * @return null|array
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * <p>Valid <a href="/../api/predicates/query">predicate</a> that controls the conditions under which the API Extension is called. The Extension is not triggered when the specified condition is not fulfilled.</p>
     *

     * @return null|string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param ?string $resourceTypeId
     * @return $this
     */
    public function withResourceTypeId(?string $resourceTypeId)
    {
        $this->resourceTypeId = $resourceTypeId;

        return $this;
    }

    /**
     * @param ?array $actions
     * @return $this
     */
    public function withActions(?array $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * @param ?string $condition
     * @return $this
     */
    public function withCondition(?string $condition)
    {
        $this->condition = $condition;

        return $this;
    }


    public function build(): ExtensionTrigger
    {
        return new ExtensionTriggerModel(
            $this->resourceTypeId,
            $this->actions,
            $this->condition
        );
    }

    public static function of(): ExtensionTriggerBuilder
    {
        return new self();
    }
}
