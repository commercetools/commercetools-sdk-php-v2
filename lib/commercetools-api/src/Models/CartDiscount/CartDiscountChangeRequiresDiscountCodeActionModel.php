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


final class CartDiscountChangeRequiresDiscountCodeActionModel extends JsonObjectModel implements CartDiscountChangeRequiresDiscountCodeAction
{
    const DISCRIMINATOR_VALUE = 'changeRequiresDiscountCode';
    public function __construct(
        string $action = null,
        bool $requiresDiscountCode = null
    ) {
        $this->action = $action;
        $this->requiresDiscountCode = $requiresDiscountCode;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $requiresDiscountCode;

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
    final public function getRequiresDiscountCode()
    {
       if (is_null($this->requiresDiscountCode)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(CartDiscountChangeRequiresDiscountCodeAction::FIELD_REQUIRES_DISCOUNT_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->requiresDiscountCode = (bool)$data;
       }
       return $this->requiresDiscountCode;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setRequiresDiscountCode(?bool $requiresDiscountCode): void
    {
        $this->requiresDiscountCode = $requiresDiscountCode;
    }
    
}