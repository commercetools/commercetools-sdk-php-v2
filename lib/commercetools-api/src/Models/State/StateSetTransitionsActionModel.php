<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class StateSetTransitionsActionModel extends JsonObjectModel implements StateSetTransitionsAction
{
    const DISCRIMINATOR_VALUE = 'setTransitions';
    public function __construct(
        string $action = null,
        StateResourceIdentifierCollection $transitions = null
    ) {
        $this->action = $action;
        $this->transitions = $transitions;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?StateResourceIdentifierCollection
     */
    protected $transitions;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StateUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return StateResourceIdentifierCollection|null
     */
    final public function getTransitions()
    {
       if (is_null($this->transitions)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(StateSetTransitionsAction::FIELD_TRANSITIONS);
           if (is_null($data)) {
               return null;
           }
           $this->transitions = StateResourceIdentifierCollection::fromArray($data);
       }
       return $this->transitions;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setTransitions(?StateResourceIdentifierCollection $transitions): void
    {
        $this->transitions = $transitions;
    }
    
}