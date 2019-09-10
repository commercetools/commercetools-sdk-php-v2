<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ProjectChangeLanguagesActionModel extends JsonObjectModel implements ProjectChangeLanguagesAction
{
    const DISCRIMINATOR_VALUE = 'changeLanguages';
    public function __construct(
        string $action = null,
        array $languages = null
    ) {
        $this->action = $action;
        $this->languages = $languages;
        
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
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProjectUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getLanguages()
    {
       if (is_null($this->languages)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(ProjectChangeLanguagesAction::FIELD_LANGUAGES);
           if (is_null($data)) {
               return null;
           }
           $this->languages = $data;
       }
       return $this->languages;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setLanguages(?array $languages): void
    {
        $this->languages = $languages;
    }
    
}