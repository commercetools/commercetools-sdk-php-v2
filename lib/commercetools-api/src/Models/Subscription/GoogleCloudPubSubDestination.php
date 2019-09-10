<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;

interface GoogleCloudPubSubDestination extends Destination
{
    
    const FIELD_PROJECT_ID = 'projectId';
    const FIELD_TOPIC = 'topic';

    /**
     *
     * @return string|null
     */
    public function getProjectId();
    
    /**
     *
     * @return string|null
     */
    public function getTopic();
    public function setProjectId(?string $projectId): void;
    
    public function setTopic(?string $topic): void;
}