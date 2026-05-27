<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ExtensionSetExpansionPathsAction extends ExtensionUpdateAction
{
    public const FIELD_EXPANSION_PATHS = 'expansionPaths';

    /**
     * <p><a href="/../api/general-concepts#expansion-paths">Expansion paths</a> used for reference expansion of the payload.</p>
     * <p>Be aware of the <a href="/../api/limits#api-extensions">limits</a> of this feature and its <a href="/../api/performance-tips#api-extensions">performance impact</a>.</p>
     *

     * @return null|array
     */
    public function getExpansionPaths();

    /**
     * @param ?array $expansionPaths
     */
    public function setExpansionPaths(?array $expansionPaths): void;
}
