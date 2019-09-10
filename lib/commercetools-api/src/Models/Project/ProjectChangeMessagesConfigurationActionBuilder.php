<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Message\MessageConfigurationDraft;
use Commercetools\Api\Models\Message\MessageConfigurationDraftBuilder;

/**
 * @implements Builder<ProjectChangeMessagesConfigurationAction>
 */
final class ProjectChangeMessagesConfigurationActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?MessageConfigurationDraftBuilder|MessageConfigurationDraft
     */
    protected $messagesConfiguration;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return MessageConfigurationDraft|null
     */
    final public function getMessagesConfiguration()
    {
       return ($this->messagesConfiguration instanceof MessageConfigurationDraftBuilder ? $this->messagesConfiguration->build() : $this->messagesConfiguration);
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMessagesConfiguration(?MessageConfigurationDraft $messagesConfiguration)
    {
        $this->messagesConfiguration = $messagesConfiguration;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withMessagesConfigurationBuilder(?MessageConfigurationDraftBuilder $messagesConfiguration)
    {
        $this->messagesConfiguration = $messagesConfiguration;
        
        return $this;
    }
    
    public function build(): ProjectChangeMessagesConfigurationAction {
        return new ProjectChangeMessagesConfigurationActionModel(
            $this->action,
            ($this->messagesConfiguration instanceof MessageConfigurationDraftBuilder ? $this->messagesConfiguration->build() : $this->messagesConfiguration)
        );
    }
    
    public static function of(): ProjectChangeMessagesConfigurationActionBuilder
    {
        return new self();
    }
}