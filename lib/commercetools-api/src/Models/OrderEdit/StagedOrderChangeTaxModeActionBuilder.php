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
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderChangeTaxModeAction>
 */
final class StagedOrderChangeTaxModeActionBuilder implements Builder
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
    protected $taxMode;

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
    final public function getTaxMode()
    {
       return $this->taxMode;
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
    final public function withTaxMode(?string $taxMode)
    {
        $this->taxMode = $taxMode;
        
        return $this;
    }
    
    public function build(): StagedOrderChangeTaxModeAction {
        return new StagedOrderChangeTaxModeActionModel(
            $this->action,
            $this->taxMode
        );
    }
    
    public static function of(): StagedOrderChangeTaxModeActionBuilder
    {
        return new self();
    }
}