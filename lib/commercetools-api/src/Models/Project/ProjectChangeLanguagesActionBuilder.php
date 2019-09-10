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
 * @implements Builder<ProjectChangeLanguagesAction>
 */
final class ProjectChangeLanguagesActionBuilder implements Builder
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
    protected $languages;

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
    final public function getLanguages()
    {
       return $this->languages;
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
    final public function withLanguages(?array $languages)
    {
        $this->languages = $languages;
        
        return $this;
    }
    
    public function build(): ProjectChangeLanguagesAction {
        return new ProjectChangeLanguagesActionModel(
            $this->action,
            $this->languages
        );
    }
    
    public static function of(): ProjectChangeLanguagesActionBuilder
    {
        return new self();
    }
}