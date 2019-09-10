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
 * @implements Builder<AzureEventGridDestination>
 */
final class AzureEventGridDestinationBuilder implements Builder
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
    protected $uri;

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
    final public function getUri()
    {
       return $this->uri;
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
    final public function withUri(?string $uri)
    {
        $this->uri = $uri;
        
        return $this;
    }
    
    public function build(): AzureEventGridDestination {
        return new AzureEventGridDestinationModel(
            $this->type,
            $this->accessKey,
            $this->uri
        );
    }
    
    public static function of(): AzureEventGridDestinationBuilder
    {
        return new self();
    }
}