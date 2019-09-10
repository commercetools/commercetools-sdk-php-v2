<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\OrderEdit\OrderEditApplied;
use Commercetools\Api\Models\OrderEdit\OrderEditAppliedBuilder;
use Commercetools\Api\Models\OrderEdit\OrderEditReference;
use Commercetools\Api\Models\OrderEdit\OrderEditReferenceBuilder;

/**
 * @implements Builder<OrderEditAppliedMessagePayload>
 */
final class OrderEditAppliedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?OrderEditAppliedBuilder|OrderEditApplied
     */
    protected $result;
    
    /**
     * @var ?OrderEditReferenceBuilder|OrderEditReference
     */
    protected $edit;

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
     * @return OrderEditApplied|null
     */
    final public function getResult()
    {
       return ($this->result instanceof OrderEditAppliedBuilder ? $this->result->build() : $this->result);
    }
    
    /**
     *
     * @return OrderEditReference|null
     */
    final public function getEdit()
    {
       return ($this->edit instanceof OrderEditReferenceBuilder ? $this->edit->build() : $this->edit);
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
    final public function withResult(?OrderEditApplied $result)
    {
        $this->result = $result;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withEdit(?OrderEditReference $edit)
    {
        $this->edit = $edit;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withResultBuilder(?OrderEditAppliedBuilder $result)
    {
        $this->result = $result;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withEditBuilder(?OrderEditReferenceBuilder $edit)
    {
        $this->edit = $edit;
        
        return $this;
    }
    
    public function build(): OrderEditAppliedMessagePayload {
        return new OrderEditAppliedMessagePayloadModel(
            $this->type,
            ($this->result instanceof OrderEditAppliedBuilder ? $this->result->build() : $this->result),
            ($this->edit instanceof OrderEditReferenceBuilder ? $this->edit->build() : $this->edit)
        );
    }
    
    public static function of(): OrderEditAppliedMessagePayloadBuilder
    {
        return new self();
    }
}