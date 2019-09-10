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
 * @implements Builder<SqsDestination>
 */
final class SqsDestinationBuilder implements Builder
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
    protected $queueUrl;
    
    /**
     * @var ?string
     */
    protected $region;
    
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
    final public function getQueueUrl()
    {
       return $this->queueUrl;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getRegion()
    {
       return $this->region;
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
    final public function withQueueUrl(?string $queueUrl)
    {
        $this->queueUrl = $queueUrl;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withRegion(?string $region)
    {
        $this->region = $region;
        
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
    
    public function build(): SqsDestination {
        return new SqsDestinationModel(
            $this->type,
            $this->accessKey,
            $this->queueUrl,
            $this->region,
            $this->accessSecret
        );
    }
    
    public static function of(): SqsDestinationBuilder
    {
        return new self();
    }
}