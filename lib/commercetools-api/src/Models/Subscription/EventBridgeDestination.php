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

    /**
     * <p>AWS region to which commercetools sends the events.</p>
     *
     * @return null|string
     */
    public function getRegion();

    /**
     * <p>ID of the AWS account that receives events from the commercetools platform.</p>
     *
     * @return null|string
     */
    public function getAccountId();

    /**
     * @param ?string $region
     */
    public function setRegion(?string $region): void;

    /**
     * @param ?string $accountId
     */
    public function setAccountId(?string $accountId): void;
}
