<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ZoneSetDescriptionAction>
 */
final class ZoneSetDescriptionActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $description;

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
     * @return string|null
     */
    final public function getDescription()
    {
       return $this->description;
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
    final public function withDescription(?string $description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    public function build(): ZoneSetDescriptionAction {
        return new ZoneSetDescriptionActionModel(
            $this->action,
            $this->description
        );
    }
    
    public static function of(): ZoneSetDescriptionActionBuilder
    {
        return new self();
    }
}