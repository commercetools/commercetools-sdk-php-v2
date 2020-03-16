<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MessageSubscriptionModel extends JsonObjectModel implements MessageSubscription
{
    /**
     * @var ?string
     */
    protected $resourceTypeId;

    /**
     * @var ?array
     */
    protected $types;


    public function __construct(
        string $resourceTypeId = null,
        array $types = null
    ) {
        $this->resourceTypeId = $resourceTypeId;
        $this->types = $types;
    }

    /**
     * @return null|string
     */
    public function getResourceTypeId()
    {
        if (is_null($this->resourceTypeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessageSubscription::FIELD_RESOURCE_TYPE_ID);
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
    public function getTypes()
    {
        if (is_null($this->types)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(MessageSubscription::FIELD_TYPES);
            if (is_null($data)) {
                return null;
            }
            $this->types = $data;
        }

        return $this->types;
    }

    public function setResourceTypeId(?string $resourceTypeId): void
    {
        $this->resourceTypeId = $resourceTypeId;
    }

    public function setTypes(?array $types): void
    {
        $this->types = $types;
    }
}
