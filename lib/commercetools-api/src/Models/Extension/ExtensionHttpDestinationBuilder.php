<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionHttpDestination>
 */
final class ExtensionHttpDestinationBuilder implements Builder
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
    protected $url;
    
    /**
     * @var ?ExtensionHttpDestinationAuthenticationBuilder|ExtensionHttpDestinationAuthentication
     */
    protected $authentication;

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
    final public function getUrl()
    {
       return $this->url;
    }
    
    /**
     *
     * @return ExtensionHttpDestinationAuthentication|null
     */
    final public function getAuthentication()
    {
       return ($this->authentication instanceof ExtensionHttpDestinationAuthenticationBuilder ? $this->authentication->build() : $this->authentication);
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
    final public function withUrl(?string $url)
    {
        $this->url = $url;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAuthentication(?ExtensionHttpDestinationAuthentication $authentication)
    {
        $this->authentication = $authentication;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withAuthenticationBuilder(?ExtensionHttpDestinationAuthenticationBuilder $authentication)
    {
        $this->authentication = $authentication;
        
        return $this;
    }
    
    public function build(): ExtensionHttpDestination {
        return new ExtensionHttpDestinationModel(
            $this->type,
            $this->url,
            ($this->authentication instanceof ExtensionHttpDestinationAuthenticationBuilder ? $this->authentication->build() : $this->authentication)
        );
    }
    
    public static function of(): ExtensionHttpDestinationBuilder
    {
        return new self();
    }
}