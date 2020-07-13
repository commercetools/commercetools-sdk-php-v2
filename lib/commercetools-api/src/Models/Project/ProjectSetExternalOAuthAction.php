<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectSetExternalOAuthAction extends ProjectUpdateAction
{
    public const FIELD_EXTERNAL_O_AUTH = 'externalOAuth';

    /**
     * <p>If you do not provide the <code>externalOAuth</code> field or provide a value
     * of <code>null</code>, the update action unsets the External OAuth provider.</p>
     *
     * @return null|ExternalOAuth
     */
    public function getExternalOAuth();

    /**
     * @param ?ExternalOAuth $externalOAuth
     */
    public function setExternalOAuth(?ExternalOAuth $externalOAuth): void;
}
