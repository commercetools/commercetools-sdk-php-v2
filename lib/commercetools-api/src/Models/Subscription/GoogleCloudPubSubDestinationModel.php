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
final class GoogleCloudPubSubDestinationModel extends JsonObjectModel implements GoogleCloudPubSubDestination
{
    public const DISCRIMINATOR_VALUE = 'GoogleCloudPubSub';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $projectId;

    /**
     * @var ?string
     */
    protected $topic;


    public function __construct(
        string $projectId = null,
        string $topic = null
    ) {
        $this->projectId = $projectId;
        $this->topic = $topic;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Destination::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getProjectId()
    {
        if (is_null($this->projectId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(GoogleCloudPubSubDestination::FIELD_PROJECT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->projectId = (string) $data;
        }

        return $this->projectId;
    }

    /**
     * @return null|string
     */
    public function getTopic()
    {
        if (is_null($this->topic)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(GoogleCloudPubSubDestination::FIELD_TOPIC);
            if (is_null($data)) {
                return null;
            }
            $this->topic = (string) $data;
        }

        return $this->topic;
    }

    public function setProjectId(?string $projectId): void
    {
        $this->projectId = $projectId;
    }

    public function setTopic(?string $topic): void
    {
        $this->topic = $topic;
    }
}
