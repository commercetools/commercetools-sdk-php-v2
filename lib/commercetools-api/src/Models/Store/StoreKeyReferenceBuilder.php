<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Store;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\KeyReference;
use Commercetools\Api\Models\Common\KeyReferenceBuilder;

/**
 * @implements Builder<StoreKeyReference>
 */
final class StoreKeyReferenceBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $typeId;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getTypeId()
    {
       return $this->typeId;
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
    final public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;
        
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
    
    public function build(): StoreKeyReference {
        return new StoreKeyReferenceModel(
            $this->typeId,
            $this->key
        );
    }
    
    public static function of(): StoreKeyReferenceBuilder
    {
        return new self();
    }
}