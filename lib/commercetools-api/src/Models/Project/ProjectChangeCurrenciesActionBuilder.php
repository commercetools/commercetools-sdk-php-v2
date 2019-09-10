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

/**
 * @implements Builder<ProjectChangeCurrenciesAction>
 */
final class ProjectChangeCurrenciesActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?array
     */
    protected $currencies;

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
     * @return array|null
     */
    final public function getCurrencies()
    {
       return $this->currencies;
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
    final public function withCurrencies(?array $currencies)
    {
        $this->currencies = $currencies;
        
        return $this;
    }
    
    public function build(): ProjectChangeCurrenciesAction {
        return new ProjectChangeCurrenciesActionModel(
            $this->action,
            $this->currencies
        );
    }
    
    public static function of(): ProjectChangeCurrenciesActionBuilder
    {
        return new self();
    }
}