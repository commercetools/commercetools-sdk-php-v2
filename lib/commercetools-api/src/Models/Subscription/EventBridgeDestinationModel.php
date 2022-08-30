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
final class EventBridgeDestinationModel extends JsonObjectModel implements EventBridgeDestination
{
    public const DISCRIMINATOR_VALUE = 'EventBridge';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $region;

    /**
     *
     * @var ?string
     */
    protected $accountId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $region = null,
        ?string $accountId = null,
        ?string $type = null
    ) {
        $this->region = $region;
        $this->accountId = $accountId;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>AWS region of the Subscriptions that receives the events.</p>
     *
     *
     * @return null|string
     */
    public function getRegion()
    {
        if (is_null($this->region)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REGION);
            if (is_null($data)) {
                return null;
            }
            $this->region = (string) $data;
        }

        return $this->region;
    }

    /**
     * <p>ID of the AWS account that receives events.</p>
     *
     *
     * @return null|string
     */
    public function getAccountId()
    {
        if (is_null($this->accountId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACCOUNT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->accountId = (string) $data;
        }

        return $this->accountId;
    }


    /**
     * @param ?string $region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    /**
     * @param ?string $accountId
     */
    public function setAccountId(?string $accountId): void
    {
        $this->accountId = $accountId;
    }
}
