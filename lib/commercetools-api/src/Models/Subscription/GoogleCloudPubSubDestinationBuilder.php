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
 * @implements Builder<GoogleCloudPubSubDestination>
 */
final class GoogleCloudPubSubDestinationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $projectId;

    /**

     * @var ?string
     */
    private $topic;

    /**
     * <p>ID of the Google Cloud project that contains the Pub/Sub topic.</p>
     *

     * @return null|string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * <p>Name of the topic.</p>
     *

     * @return null|string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @param ?string $projectId
     * @return $this
     */
    public function withProjectId(?string $projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * @param ?string $topic
     * @return $this
     */
    public function withTopic(?string $topic)
    {
        $this->topic = $topic;

        return $this;
    }


    public function build(): GoogleCloudPubSubDestination
    {
        return new GoogleCloudPubSubDestinationModel(
            $this->projectId,
            $this->topic
        );
    }

    public static function of(): GoogleCloudPubSubDestinationBuilder
    {
        return new self();
    }
}
