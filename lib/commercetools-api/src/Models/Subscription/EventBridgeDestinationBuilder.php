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
 * @implements Builder<EventBridgeDestination>
 */
final class EventBridgeDestinationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $region;

    /**
     * @var ?string
     */
    private $accountId;

    /**
     * <p>AWS region to which commercetools sends the events.</p>
     *
     * @return null|string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * <p>ID of the AWS account that receives events from the commercetools platform.</p>
     *
     * @return null|string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param ?string $region
     * @return $this
     */
    public function withRegion(?string $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @param ?string $accountId
     * @return $this
     */
    public function withAccountId(?string $accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }


    public function build(): EventBridgeDestination
    {
        return new EventBridgeDestinationModel(
            $this->region,
            $this->accountId
        );
    }

    public static function of(): EventBridgeDestinationBuilder
    {
        return new self();
    }
}
