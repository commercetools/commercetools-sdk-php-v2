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
final class ChangeSubscriptionModel extends JsonObjectModel implements ChangeSubscription
{
    /**
     *
     * @var ?string
     */
    protected $resourceTypeId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $resourceTypeId = null
    ) {
        $this->resourceTypeId = $resourceTypeId;
    }

    /**
     * <p>Unique identifier for the type of resource, for example, <code>cart</code>.</p>
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
     * @param ?string $resourceTypeId
     */
    public function setResourceTypeId(?string $resourceTypeId): void
    {
        $this->resourceTypeId = $resourceTypeId;
    }
}
