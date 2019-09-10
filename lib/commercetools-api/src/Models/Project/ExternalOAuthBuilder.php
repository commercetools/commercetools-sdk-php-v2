<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExternalOAuth>
 */
final class ExternalOAuthBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $authorizationHeader;
    
    /**
     * @var ?string
     */
    protected $url;

    /**
     *
     * @return string|null
     */
    final public function getAuthorizationHeader()
    {
       return $this->authorizationHeader;
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
     * @return $this
     */
    final public function withAuthorizationHeader(?string $authorizationHeader)
    {
        $this->authorizationHeader = $authorizationHeader;
        
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
    
    public function build(): ExternalOAuth {
        return new ExternalOAuthModel(
            $this->authorizationHeader,
            $this->url
        );
    }
    
    public static function of(): ExternalOAuthBuilder
    {
        return new self();
    }
}