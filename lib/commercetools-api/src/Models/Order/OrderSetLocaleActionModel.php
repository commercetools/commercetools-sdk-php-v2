<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class OrderSetLocaleActionModel extends JsonObjectModel implements OrderSetLocaleAction
{
    const DISCRIMINATOR_VALUE = 'setLocale';
    public function __construct(
        string $action = null,
        string $locale = null
    ) {
        $this->action = $action;
        $this->locale = $locale;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $locale;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
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
    final public function getLocale()
    {
       if (is_null($this->locale)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderSetLocaleAction::FIELD_LOCALE);
           if (is_null($data)) {
               return null;
           }
           $this->locale = (string)$data;
       }
       return $this->locale;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }
    
}