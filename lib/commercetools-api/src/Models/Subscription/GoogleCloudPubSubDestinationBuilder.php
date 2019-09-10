<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;

/**
 * @implements Builder<GoogleCloudPubSubDestination>
 */
final class GoogleCloudPubSubDestinationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?string
     */
    private $topic;

    /**
     * @var ?string
     */
    private $projectId;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @return null|string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTopic(?string $topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProjectId(?string $projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    public function build(): GoogleCloudPubSubDestination
    {
        return new GoogleCloudPubSubDestinationModel(
            $this->type,
            $this->topic,
            $this->projectId
        );
    }

    public static function of(): GoogleCloudPubSubDestinationBuilder
    {
        return new self();
    }
}
