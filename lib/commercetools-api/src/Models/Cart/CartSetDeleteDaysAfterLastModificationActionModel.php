<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CartSetDeleteDaysAfterLastModificationActionModel extends JsonObjectModel implements CartSetDeleteDaysAfterLastModificationAction
{
    const DISCRIMINATOR_VALUE = 'setDeleteDaysAfterLastModification';
    public function __construct(
        string $action = null,
        int $deleteDaysAfterLastModification = null
    ) {
        $this->action = $action;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getDeleteDaysAfterLastModification()
    {
       if (is_null($this->deleteDaysAfterLastModification)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CartSetDeleteDaysAfterLastModificationAction::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
           if (is_null($data)) {
               return null;
           }
           $this->deleteDaysAfterLastModification = (int)$data;
       }
       return $this->deleteDaysAfterLastModification;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }
    
}