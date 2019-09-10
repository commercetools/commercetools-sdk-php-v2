<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class GoogleCloudPubSubDestinationModel extends JsonObjectModel implements GoogleCloudPubSubDestination
{
    const DISCRIMINATOR_VALUE = 'GoogleCloudPubSub';
    public function __construct(
        string $type = null,
        string $topic = null,
        string $projectId = null
    ) {
        $this->type = $type;
        $this->topic = $topic;
        $this->projectId = $projectId;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $topic;
    
    /**
     * @var ?string
     */
    protected $projectId;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Destination::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTopic()
    {
       if (is_null($this->topic)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(GoogleCloudPubSubDestination::FIELD_TOPIC);
           if (is_null($data)) {
               return null;
           }
           $this->topic = (string)$data;
       }
       return $this->topic;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getProjectId()
    {
       if (is_null($this->projectId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(GoogleCloudPubSubDestination::FIELD_PROJECT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->projectId = (string)$data;
       }
       return $this->projectId;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setTopic(?string $topic): void
    {
        $this->topic = $topic;
    }
    
    final public function setProjectId(?string $projectId): void
    {
        $this->projectId = $projectId;
    }
    
}