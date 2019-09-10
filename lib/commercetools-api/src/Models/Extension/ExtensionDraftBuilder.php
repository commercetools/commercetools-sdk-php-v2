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
 * @implements Builder<ExtensionDraft>
 */
final class ExtensionDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $timeoutInMs;
    
    /**
     * @var ?ExtensionDestinationBuilder|ExtensionDestination
     */
    protected $destination;
    
    /**
     * @var ?ExtensionTriggerCollection
     */
    protected $triggers;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return int|null
     */
    final public function getTimeoutInMs()
    {
       return $this->timeoutInMs;
    }
    
    /**
     *
     * @return ExtensionDestination|null
     */
    final public function getDestination()
    {
       return ($this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination);
    }
    
    /**
     *
     * @return ExtensionTriggerCollection|null
     */
    final public function getTriggers()
    {
       return $this->triggers;
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
    final public function withTimeoutInMs(?int $timeoutInMs)
    {
        $this->timeoutInMs = $timeoutInMs;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDestination(?ExtensionDestination $destination)
    {
        $this->destination = $destination;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTriggers(?ExtensionTriggerCollection $triggers)
    {
        $this->triggers = $triggers;
        
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
    /**
     * @return $this
     */
    final public function withDestinationBuilder(?ExtensionDestinationBuilder $destination)
    {
        $this->destination = $destination;
        
        return $this;
    }
    
    public function build(): ExtensionDraft {
        return new ExtensionDraftModel(
            $this->timeoutInMs,
            ($this->destination instanceof ExtensionDestinationBuilder ? $this->destination->build() : $this->destination),
            $this->triggers,
            $this->key
        );
    }
    
    public static function of(): ExtensionDraftBuilder
    {
        return new self();
    }
}