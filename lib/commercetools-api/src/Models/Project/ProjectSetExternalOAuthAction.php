<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;

interface ProjectSetExternalOAuthAction extends ProjectUpdateAction
{
    
    const FIELD_EXTERNAL_O_AUTH = 'externalOAuth';

    /**
     *
     * @return ExternalOAuth|null
     */
    public function getExternalOAuth();
    public function setExternalOAuth(?ExternalOAuth $externalOAuth): void;
}