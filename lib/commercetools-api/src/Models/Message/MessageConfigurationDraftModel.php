<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class MessageConfigurationDraftModel extends JsonObjectModel implements MessageConfigurationDraft
{
    
    public function __construct(
        int $deleteDaysAfterCreation = null,
        bool $enabled = null
    ) {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
        $this->enabled = $enabled;
        
    }

    /**
     * @var ?int
     */
    protected $deleteDaysAfterCreation;
    
    /**
     * @var ?bool
     */
    protected $enabled;

    /**
     *
     * @return int|null
     */
    final public function getDeleteDaysAfterCreation()
    {
       if (is_null($this->deleteDaysAfterCreation)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(MessageConfigurationDraft::FIELD_DELETE_DAYS_AFTER_CREATION);
           if (is_null($data)) {
               return null;
           }
           $this->deleteDaysAfterCreation = (int)$data;
       }
       return $this->deleteDaysAfterCreation;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getEnabled()
    {
       if (is_null($this->enabled)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(MessageConfigurationDraft::FIELD_ENABLED);
           if (is_null($data)) {
               return null;
           }
           $this->enabled = (bool)$data;
       }
       return $this->enabled;
    }
    final public function setDeleteDaysAfterCreation(?int $deleteDaysAfterCreation): void
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
    }
    
    final public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }
    
}