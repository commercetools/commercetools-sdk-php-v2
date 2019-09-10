<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomObjectDraft>
 */
final class CustomObjectDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $container;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?JsonObject
     */
    protected $value;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getContainer()
    {
       return $this->container;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getValue()
    {
       return $this->value;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    /**
     * @return $this
     */
    final public function withContainer(?string $container)
    {
        $this->container = $container;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValue(?JsonObject $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    public function build(): CustomObjectDraft {
        return new CustomObjectDraftModel(
            $this->container,
            $this->version,
            $this->value,
            $this->key
        );
    }
    
    public static function of(): CustomObjectDraftBuilder
    {
        return new self();
    }
}