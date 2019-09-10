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
 * @implements Builder<SnsDestination>
 */
final class SnsDestinationBuilder implements Builder
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
    protected $accessKey;
    
    /**
     * @var ?string
     */
    protected $topicArn;
    
    /**
     * @var ?string
     */
    protected $accessSecret;

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
    final public function getAccessKey()
    {
       return $this->accessKey;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTopicArn()
    {
       return $this->topicArn;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAccessSecret()
    {
       return $this->accessSecret;
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
    final public function withAccessKey(?string $accessKey)
    {
        $this->accessKey = $accessKey;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTopicArn(?string $topicArn)
    {
        $this->topicArn = $topicArn;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAccessSecret(?string $accessSecret)
    {
        $this->accessSecret = $accessSecret;
        
        return $this;
    }
    
    public function build(): SnsDestination {
        return new SnsDestinationModel(
            $this->type,
            $this->accessKey,
            $this->topicArn,
            $this->accessSecret
        );
    }
    
    public static function of(): SnsDestinationBuilder
    {
        return new self();
    }
}