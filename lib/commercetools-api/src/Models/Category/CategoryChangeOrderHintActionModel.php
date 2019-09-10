<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CategoryChangeOrderHintActionModel extends JsonObjectModel implements CategoryChangeOrderHintAction
{
    const DISCRIMINATOR_VALUE = 'changeOrderHint';
    public function __construct(
        string $action = null,
        string $orderHint = null
    ) {
        $this->action = $action;
        $this->orderHint = $orderHint;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $orderHint;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CategoryUpdateAction::FIELD_ACTION);
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
    final public function getOrderHint()
    {
       if (is_null($this->orderHint)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CategoryChangeOrderHintAction::FIELD_ORDER_HINT);
           if (is_null($data)) {
               return null;
           }
           $this->orderHint = (string)$data;
       }
       return $this->orderHint;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setOrderHint(?string $orderHint): void
    {
        $this->orderHint = $orderHint;
    }
    
}