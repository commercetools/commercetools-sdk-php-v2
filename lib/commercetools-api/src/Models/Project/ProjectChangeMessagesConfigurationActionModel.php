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

use Commercetools\Api\Models\Message\MessageConfigurationDraft;
use Commercetools\Api\Models\Message\MessageConfigurationDraftModel;

final class ProjectChangeMessagesConfigurationActionModel extends JsonObjectModel implements ProjectChangeMessagesConfigurationAction
{
    const DISCRIMINATOR_VALUE = 'changeMessagesConfiguration';
    public function __construct(
        string $action = null,
        MessageConfigurationDraft $messagesConfiguration = null
    ) {
        $this->action = $action;
        $this->messagesConfiguration = $messagesConfiguration;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?MessageConfigurationDraft
     */
    protected $messagesConfiguration;

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
     * @return MessageConfigurationDraft|null
     */
    final public function getMessagesConfiguration()
    {
       if (is_null($this->messagesConfiguration)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProjectChangeMessagesConfigurationAction::FIELD_MESSAGES_CONFIGURATION);
           if (is_null($data)) {
               return null;
           }
           
           $this->messagesConfiguration = MessageConfigurationDraftModel::of($data);
       }
       return $this->messagesConfiguration;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setMessagesConfiguration(?MessageConfigurationDraft $messagesConfiguration): void
    {
        $this->messagesConfiguration = $messagesConfiguration;
    }
    
}