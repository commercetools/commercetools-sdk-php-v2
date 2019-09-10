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
 * @implements Builder<ExtensionAuthorizationHeaderAuthentication>
 */
final class ExtensionAuthorizationHeaderAuthenticationBuilder implements Builder
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
    protected $headerValue;

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
    final public function getHeaderValue()
    {
       return $this->headerValue;
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
    final public function withHeaderValue(?string $headerValue)
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    
    public function build(): ExtensionAuthorizationHeaderAuthentication {
        return new ExtensionAuthorizationHeaderAuthenticationModel(
            $this->type,
            $this->headerValue
        );
    }
    
    public static function of(): ExtensionAuthorizationHeaderAuthenticationBuilder
    {
        return new self();
    }
}