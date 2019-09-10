<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CartDiscountChangeStackingModeActionModel extends JsonObjectModel implements CartDiscountChangeStackingModeAction
{
    const DISCRIMINATOR_VALUE = 'changeStackingMode';
    public function __construct(
        string $action = null,
        string $stackingMode = null
    ) {
        $this->action = $action;
        $this->stackingMode = $stackingMode;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $stackingMode;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDiscountUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getStackingMode()
    {
       if (is_null($this->stackingMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDiscountChangeStackingModeAction::FIELD_STACKING_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->stackingMode = (string)$data;
       }
       return $this->stackingMode;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setStackingMode(?string $stackingMode): void
    {
        $this->stackingMode = $stackingMode;
    }
    
}