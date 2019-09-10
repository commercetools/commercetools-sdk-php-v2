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
 * @implements Builder<ProjectChangeCountriesAction>
 */
final class ProjectChangeCountriesActionBuilder implements Builder
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
    protected $countries;

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
    final public function getCountries()
    {
       return $this->countries;
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
    final public function withCountries(?array $countries)
    {
        $this->countries = $countries;
        
        return $this;
    }
    
    public function build(): ProjectChangeCountriesAction {
        return new ProjectChangeCountriesActionModel(
            $this->action,
            $this->countries
        );
    }
    
    public static function of(): ProjectChangeCountriesActionBuilder
    {
        return new self();
    }
}