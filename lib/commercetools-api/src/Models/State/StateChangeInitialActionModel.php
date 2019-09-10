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


final class StateChangeInitialActionModel extends JsonObjectModel implements StateChangeInitialAction
{
    const DISCRIMINATOR_VALUE = 'changeInitial';
    public function __construct(
        string $action = null,
        bool $initial = null
    ) {
        $this->action = $action;
        $this->initial = $initial;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $initial;

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
     * @return bool|null
     */
    final public function getInitial()
    {
       if (is_null($this->initial)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(StateChangeInitialAction::FIELD_INITIAL);
           if (is_null($data)) {
               return null;
           }
           $this->initial = (bool)$data;
       }
       return $this->initial;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setInitial(?bool $initial): void
    {
        $this->initial = $initial;
    }
    
}