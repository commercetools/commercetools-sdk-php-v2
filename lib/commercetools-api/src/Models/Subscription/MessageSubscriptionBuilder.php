<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MessageSubscription>
 */
final class MessageSubscriptionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $types;

    /**
     * @var ?string
     */
    private $resourceTypeId;

    public function __construct()
    {
    }

    /**
     * @return null|array
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @return null|string
     */
    public function getResourceTypeId()
    {
        return $this->resourceTypeId;
    }

    /**
     * @return $this
     */
    public function withTypes(?array $types)
    {
        $this->types = $types;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceTypeId(?string $resourceTypeId)
    {
        $this->resourceTypeId = $resourceTypeId;

        return $this;
    }

    public function build(): MessageSubscription
    {
        return new MessageSubscriptionModel(
            $this->types,
            $this->resourceTypeId
        );
    }

    public static function of(): MessageSubscriptionBuilder
    {
        return new self();
    }
}
