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


final class SqsDestinationModel extends JsonObjectModel implements SqsDestination
{
    const DISCRIMINATOR_VALUE = 'SQS';
    public function __construct(
        string $type = null,
        string $accessKey = null,
        string $queueUrl = null,
        string $region = null,
        string $accessSecret = null
    ) {
        $this->type = $type;
        $this->accessKey = $accessKey;
        $this->queueUrl = $queueUrl;
        $this->region = $region;
        $this->accessSecret = $accessSecret;
        
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
    final public function getAccessKey()
    {
       if (is_null($this->accessKey)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SqsDestination::FIELD_ACCESS_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->accessKey = (string)$data;
       }
       return $this->accessKey;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getQueueUrl()
    {
       if (is_null($this->queueUrl)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SqsDestination::FIELD_QUEUE_URL);
           if (is_null($data)) {
               return null;
           }
           $this->queueUrl = (string)$data;
       }
       return $this->queueUrl;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getRegion()
    {
       if (is_null($this->region)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SqsDestination::FIELD_REGION);
           if (is_null($data)) {
               return null;
           }
           $this->region = (string)$data;
       }
       return $this->region;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAccessSecret()
    {
       if (is_null($this->accessSecret)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(SqsDestination::FIELD_ACCESS_SECRET);
           if (is_null($data)) {
               return null;
           }
           $this->accessSecret = (string)$data;
       }
       return $this->accessSecret;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setAccessKey(?string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }
    
    final public function setQueueUrl(?string $queueUrl): void
    {
        $this->queueUrl = $queueUrl;
    }
    
    final public function setRegion(?string $region): void
    {
        $this->region = $region;
    }
    
    final public function setAccessSecret(?string $accessSecret): void
    {
        $this->accessSecret = $accessSecret;
    }
    
}