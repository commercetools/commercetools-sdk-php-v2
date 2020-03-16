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
     * @var ?string
     */
    protected $resourceTypeId;

    /**
     * @var ?array
     */
    protected $actions;


    public function __construct(
        string $resourceTypeId = null,
        array $actions = null
    ) {
        $this->resourceTypeId = $resourceTypeId;
        $this->actions = $actions;
    }

    /**
     * @return null|string
     */
    public function getResourceTypeId()
    {
        if (is_null($this->resourceTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionTrigger::FIELD_RESOURCE_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->resourceTypeId = (string) $data;
        }

        return $this->resourceTypeId;
    }

    /**
     * @return null|array
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(ExtensionTrigger::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = $data;
        }

        return $this->actions;
    }

    public function setResourceTypeId(?string $resourceTypeId): void
    {
        $this->resourceTypeId = $resourceTypeId;
    }

    public function setActions(?array $actions): void
    {
        $this->actions = $actions;
    }
}
