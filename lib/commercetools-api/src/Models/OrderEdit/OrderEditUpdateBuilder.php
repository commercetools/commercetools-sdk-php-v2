<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderEditUpdate>
 */
final class OrderEditUpdateBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?bool
     */
    protected $dryRun;
    
    /**
     * @var ?OrderEditUpdateActionCollection
     */
    protected $actions;
    
    /**
     * @var ?int
     */
    protected $version;

    /**
     *
     * @return bool|null
     */
    final public function getDryRun()
    {
       return $this->dryRun;
    }
    
    /**
     *
     * @return OrderEditUpdateActionCollection|null
     */
    final public function getActions()
    {
       return $this->actions;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    /**
     * @return $this
     */
    final public function withDryRun(?bool $dryRun)
    {
        $this->dryRun = $dryRun;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withActions(?OrderEditUpdateActionCollection $actions)
    {
        $this->actions = $actions;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    public function build(): OrderEditUpdate {
        return new OrderEditUpdateModel(
            $this->dryRun,
            $this->actions,
            $this->version
        );
    }
    
    public static function of(): OrderEditUpdateBuilder
    {
        return new self();
    }
}