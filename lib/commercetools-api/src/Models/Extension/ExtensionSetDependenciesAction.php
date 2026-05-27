<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionSetDependenciesAction extends ExtensionUpdateAction
{
    public const FIELD_DEPENDENCIES = 'dependencies';

    /**
     * <p>Extensions this Extension depends on, identified by <code>id</code> or <code>key</code>. Set to an empty array to remove all dependencies. Maximum 5 entries.</p>
     *

     * @return null|ExtensionResourceIdentifierCollection
     */
    public function getDependencies();

    /**
     * @param ?ExtensionResourceIdentifierCollection $dependencies
     */
    public function setDependencies(?ExtensionResourceIdentifierCollection $dependencies): void;
}
