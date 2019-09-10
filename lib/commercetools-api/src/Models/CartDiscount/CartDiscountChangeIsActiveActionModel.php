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


final class CartDiscountChangeIsActiveActionModel extends JsonObjectModel implements CartDiscountChangeIsActiveAction
{
    const DISCRIMINATOR_VALUE = 'changeIsActive';
    public function __construct(
        string $action = null,
        bool $isActive = null
    ) {
        $this->action = $action;
        $this->isActive = $isActive;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $isActive;

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
     * @return bool|null
     */
    final public function getIsActive()
    {
       if (is_null($this->isActive)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(CartDiscountChangeIsActiveAction::FIELD_IS_ACTIVE);
           if (is_null($data)) {
               return null;
           }
           $this->isActive = (bool)$data;
       }
       return $this->isActive;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }
    
}