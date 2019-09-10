<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderEditApply>
 */
final class OrderEditApplyBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $resourceVersion;
    
    /**
     * @var ?int
     */
    protected $editVersion;

    /**
     *
     * @return int|null
     */
    final public function getResourceVersion()
    {
       return $this->resourceVersion;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getEditVersion()
    {
       return $this->editVersion;
    }
    /**
     * @return $this
     */
    final public function withResourceVersion(?int $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withEditVersion(?int $editVersion)
    {
        $this->editVersion = $editVersion;
        
        return $this;
    }
    
    public function build(): OrderEditApply {
        return new OrderEditApplyModel(
            $this->resourceVersion,
            $this->editVersion
        );
    }
    
    public static function of(): OrderEditApplyBuilder
    {
        return new self();
    }
}