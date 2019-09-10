<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ProjectChangeMessagesEnabledActionModel extends JsonObjectModel implements ProjectChangeMessagesEnabledAction
{
    const DISCRIMINATOR_VALUE = 'changeMessagesEnabled';
    public function __construct(
        string $action = null,
        bool $messagesEnabled = null
    ) {
        $this->action = $action;
        $this->messagesEnabled = $messagesEnabled;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $messagesEnabled;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProjectUpdateAction::FIELD_ACTION);
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
    final public function getMessagesEnabled()
    {
       if (is_null($this->messagesEnabled)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProjectChangeMessagesEnabledAction::FIELD_MESSAGES_ENABLED);
           if (is_null($data)) {
               return null;
           }
           $this->messagesEnabled = (bool)$data;
       }
       return $this->messagesEnabled;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setMessagesEnabled(?bool $messagesEnabled): void
    {
        $this->messagesEnabled = $messagesEnabled;
    }
    
}