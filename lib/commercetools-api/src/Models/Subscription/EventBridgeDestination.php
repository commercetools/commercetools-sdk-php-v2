<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface EventBridgeDestination extends Destination
{
    public const FIELD_REGION = 'region';
    public const FIELD_ACCOUNT_ID = 'accountId';
    public const FIELD_SOURCE = 'source';

    /**
     * <p>AWS region that receives the events.</p>
     *

     * @return null|string
     */
    public function getRegion();

    /**
     * <p>ID of the AWS account that receives the events.</p>
     *

     * @return null|string
     */
    public function getAccountId();

    /**
     * <p>URN for the EventBridge destination.</p>
     *

     * @return null|string
     */
    public function getSource();

    /**
     * @param ?string $region
     */
    public function setRegion(?string $region): void;

    /**
     * @param ?string $accountId
     */
    public function setAccountId(?string $accountId): void;

    /**
     * @param ?string $source
     */
    public function setSource(?string $source): void;
}
