<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChannelUpdateAction>
 */
final class ChannelUpdateActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    public function build(): ChannelUpdateAction {
        return new ChannelUpdateActionModel(
            $this->action
        );
    }
    
    public static function of(): ChannelUpdateActionBuilder
    {
        return new self();
    }
}