<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

/**
 * @implements Builder<SubscriptionUpdate>
 */
final class SubscriptionUpdateBuilder implements Builder
{
    /**
     * @var ?SubscriptionUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @return null|SubscriptionUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function withActions(?SubscriptionUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function build(): SubscriptionUpdate
    {
        return new SubscriptionUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): SubscriptionUpdateBuilder
    {
        return new self();
    }
}
