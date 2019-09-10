<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ProductDiscountChangePredicateActionModel extends JsonObjectModel implements ProductDiscountChangePredicateAction
{
    const DISCRIMINATOR_VALUE = 'changePredicate';
    public function __construct(
        string $action = null,
        string $predicate = null
    ) {
        $this->action = $action;
        $this->predicate = $predicate;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $predicate;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDiscountUpdateAction::FIELD_ACTION);
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
    final public function getPredicate()
    {
       if (is_null($this->predicate)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDiscountChangePredicateAction::FIELD_PREDICATE);
           if (is_null($data)) {
               return null;
           }
           $this->predicate = (string)$data;
       }
       return $this->predicate;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }
    
}