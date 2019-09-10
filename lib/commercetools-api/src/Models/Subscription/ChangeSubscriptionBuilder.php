<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ChangeSubscription>
 */
final class ChangeSubscriptionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $resourceTypeId;

    public function __construct()
    {
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
    public function withResourceTypeId(?string $resourceTypeId)
    {
        $this->resourceTypeId = $resourceTypeId;

        return $this;
    }

    public function build(): ChangeSubscription
    {
        return new ChangeSubscriptionModel(
            $this->resourceTypeId
        );
    }

    public static function of(): ChangeSubscriptionBuilder
    {
        return new self();
    }
}
