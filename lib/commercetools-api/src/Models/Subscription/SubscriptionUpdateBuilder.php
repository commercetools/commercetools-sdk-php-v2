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
 * @implements Builder<SubscriptionUpdate>
 */
final class SubscriptionUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?SubscriptionUpdateActionCollection
     */
    private $actions;

    /**

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**

     * @return null|SubscriptionUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?SubscriptionUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?SubscriptionUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): SubscriptionUpdate
    {
        return new SubscriptionUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): SubscriptionUpdateBuilder
    {
        return new self();
    }
}
