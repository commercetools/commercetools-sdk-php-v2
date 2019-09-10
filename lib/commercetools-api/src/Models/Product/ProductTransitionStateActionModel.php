<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;

final class ProductTransitionStateActionModel extends JsonObjectModel implements ProductTransitionStateAction
{
    const DISCRIMINATOR_VALUE = 'transitionState';
    public function __construct(
        string $action = null,
        bool $force = null,
        StateResourceIdentifier $state = null
    ) {
        $this->action = $action;
        $this->force = $force;
        $this->state = $state;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $force;
    
    /**
     * @var ?StateResourceIdentifier
     */
    protected $state;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
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
    final public function getForce()
    {
       if (is_null($this->force)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductTransitionStateAction::FIELD_FORCE);
           if (is_null($data)) {
               return null;
           }
           $this->force = (bool)$data;
       }
       return $this->force;
    }
    
    /**
     *
     * @return StateResourceIdentifier|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductTransitionStateAction::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->state = StateResourceIdentifierModel::of($data);
       }
       return $this->state;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setForce(?bool $force): void
    {
        $this->force = $force;
    }
    
    final public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }
    
}