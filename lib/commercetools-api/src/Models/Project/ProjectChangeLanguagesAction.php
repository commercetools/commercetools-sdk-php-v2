<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;

interface ProjectChangeLanguagesAction extends ProjectUpdateAction
{
    
    const FIELD_LANGUAGES = 'languages';

    /**
     *
     * @return array|null
     */
    public function getLanguages();
    public function setLanguages(?array $languages): void;
}