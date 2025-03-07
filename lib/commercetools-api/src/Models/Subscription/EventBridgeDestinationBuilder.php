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

     * @var ?string
     */
    private $source;

    /**
     * <p>AWS region that receives the events.</p>
     *

     * @return null|string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * <p>ID of the AWS account that receives the events.</p>
     *

     * @return null|string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * <p>URN for the EventBridge destination.</p>
     *

     * @return null|string
     */
    public function getSource()
    {
        return $this->source;
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

    /**
     * @param ?string $source
     * @return $this
     */
    public function withSource(?string $source)
    {
        $this->source = $source;

        return $this;
    }


    public function build(): EventBridgeDestination
    {
        return new EventBridgeDestinationModel(
            $this->region,
            $this->accountId,
            $this->source
        );
    }

    public static function of(): EventBridgeDestinationBuilder
    {
        return new self();
    }
}
