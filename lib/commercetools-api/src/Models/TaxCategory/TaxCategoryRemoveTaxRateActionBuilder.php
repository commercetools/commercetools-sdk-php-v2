<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxCategoryRemoveTaxRateAction>
 */
final class TaxCategoryRemoveTaxRateActionBuilder implements Builder
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
    protected $taxRateId;

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
    final public function getTaxRateId()
    {
       return $this->taxRateId;
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
    final public function withTaxRateId(?string $taxRateId)
    {
        $this->taxRateId = $taxRateId;
        
        return $this;
    }
    
    public function build(): TaxCategoryRemoveTaxRateAction {
        return new TaxCategoryRemoveTaxRateActionModel(
            $this->action,
            $this->taxRateId
        );
    }
    
    public static function of(): TaxCategoryRemoveTaxRateActionBuilder
    {
        return new self();
    }
}