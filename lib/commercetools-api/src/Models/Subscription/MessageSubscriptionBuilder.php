<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MessageSubscription>
 */
final class MessageSubscriptionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $resourceTypeId;

    /**

     * @var ?array
     */
    private $types;

    /**

     * @return null|string
     */
    public function getResourceTypeId()
    {
        return $this->resourceTypeId;
    }

    /**

     * @return null|array
     */
    public function getTypes()
    {
        return $this->types;
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
     * @param ?array $types
     * @return $this
     */
    public function withTypes(?array $types)
    {
        $this->types = $types;

        return $this;
    }


    public function build(): MessageSubscription
    {
        return new MessageSubscriptionModel(
            $this->resourceTypeId,
            $this->types
        );
    }

    public static function of(): MessageSubscriptionBuilder
    {
        return new self();
    }
}
