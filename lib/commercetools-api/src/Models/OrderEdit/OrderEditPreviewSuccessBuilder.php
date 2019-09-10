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
use Commercetools\Api\Models\Message\MessagePayloadCollection;

/**
 * @implements Builder<OrderEditPreviewSuccess>
 */
final class OrderEditPreviewSuccessBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?StagedOrderBuilder|StagedOrder
     */
    protected $preview;
    
    /**
     * @var ?MessagePayloadCollection
     */
    protected $messagePayloads;

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
     * @return StagedOrder|null
     */
    final public function getPreview()
    {
       return ($this->preview instanceof StagedOrderBuilder ? $this->preview->build() : $this->preview);
    }
    
    /**
     *
     * @return MessagePayloadCollection|null
     */
    final public function getMessagePayloads()
    {
       return $this->messagePayloads;
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
    final public function withPreview(?StagedOrder $preview)
    {
        $this->preview = $preview;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMessagePayloads(?MessagePayloadCollection $messagePayloads)
    {
        $this->messagePayloads = $messagePayloads;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withPreviewBuilder(?StagedOrderBuilder $preview)
    {
        $this->preview = $preview;
        
        return $this;
    }
    
    public function build(): OrderEditPreviewSuccess {
        return new OrderEditPreviewSuccessModel(
            $this->type,
            ($this->preview instanceof StagedOrderBuilder ? $this->preview->build() : $this->preview),
            $this->messagePayloads
        );
    }
    
    public static function of(): OrderEditPreviewSuccessBuilder
    {
        return new self();
    }
}