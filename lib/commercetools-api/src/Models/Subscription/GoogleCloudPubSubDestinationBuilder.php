<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GoogleCloudPubSubDestination>
 */
final class GoogleCloudPubSubDestinationBuilder implements Builder
{
    public function __construct() {
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
       return $this->type;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTopic()
    {
       return $this->topic;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getProjectId()
    {
       return $this->projectId;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTopic(?string $topic)
    {
        $this->topic = $topic;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProjectId(?string $projectId)
    {
        $this->projectId = $projectId;
        
        return $this;
    }
    
    public function build(): GoogleCloudPubSubDestination {
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