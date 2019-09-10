<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SubscriptionSetMessagesAction>
 */
final class SubscriptionSetMessagesActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?MessageSubscriptionCollection
     */
    protected $messages;

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
     * @return MessageSubscriptionCollection|null
     */
    final public function getMessages()
    {
       return $this->messages;
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
    final public function withMessages(?MessageSubscriptionCollection $messages)
    {
        $this->messages = $messages;
        
        return $this;
    }
    
    public function build(): SubscriptionSetMessagesAction {
        return new SubscriptionSetMessagesActionModel(
            $this->action,
            $this->messages
        );
    }
    
    public static function of(): SubscriptionSetMessagesActionBuilder
    {
        return new self();
    }
}