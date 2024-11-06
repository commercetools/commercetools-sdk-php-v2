<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ExtensionTriggerModel extends JsonObjectModel implements ExtensionTrigger
{
    /**
     *
     * @var ?string
     */
    protected $resourceTypeId;

    /**
     *
     * @var ?array
     */
    protected $actions;

    /**
     *
     * @var ?string
     */
    protected $condition;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $resourceTypeId = null,
        ?array $actions = null,
        ?string $condition = null
    ) {
        $this->resourceTypeId = $resourceTypeId;
        $this->actions = $actions;
        $this->condition = $condition;
    }

    /**
     * <p>The resource that triggers the Extension.</p>
     *
     *
     * @return null|string
     */
    public function getResourceTypeId()
    {
        if (is_null($this->resourceTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RESOURCE_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->resourceTypeId = (string) $data;
        }

        return $this->resourceTypeId;
    }

    /**
     * <p><code>Create</code> and <code>Update</code> requests are supported.</p>
     *
     *
     * @return null|array
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = $data;
        }

        return $this->actions;
    }

    /**
     * <p>Valid <a href="/../api/predicates/query">predicate</a> that controls the conditions under which the API Extension is called. The Extension is not triggered when the specified condition is not fulfilled.</p>
     *
     *
     * @return null|string
     */
    public function getCondition()
    {
        if (is_null($this->condition)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONDITION);
            if (is_null($data)) {
                return null;
            }
            $this->condition = (string) $data;
        }

        return $this->condition;
    }


    /**
     * @param ?string $resourceTypeId
     */
    public function setResourceTypeId(?string $resourceTypeId): void
    {
        $this->resourceTypeId = $resourceTypeId;
    }

    /**
     * @param ?array $actions
     */
    public function setActions(?array $actions): void
    {
        $this->actions = $actions;
    }

    /**
     * @param ?string $condition
     */
    public function setCondition(?string $condition): void
    {
        $this->condition = $condition;
    }
}
