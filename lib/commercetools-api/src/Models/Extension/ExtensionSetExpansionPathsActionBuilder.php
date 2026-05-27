<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionSetExpansionPathsAction>
 */
final class ExtensionSetExpansionPathsActionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $expansionPaths;

    /**
     * <p><a href="/../api/general-concepts#expansion-paths">Expansion paths</a> used for reference expansion of the payload.</p>
     * <p>Be aware of the <a href="/../api/limits#api-extensions">limits</a> of this feature and its <a href="/../api/performance-tips#api-extensions">performance impact</a>.</p>
     *

     * @return null|array
     */
    public function getExpansionPaths()
    {
        return $this->expansionPaths;
    }

    /**
     * @param ?array $expansionPaths
     * @return $this
     */
    public function withExpansionPaths(?array $expansionPaths)
    {
        $this->expansionPaths = $expansionPaths;

        return $this;
    }


    public function build(): ExtensionSetExpansionPathsAction
    {
        return new ExtensionSetExpansionPathsActionModel(
            $this->expansionPaths
        );
    }

    public static function of(): ExtensionSetExpansionPathsActionBuilder
    {
        return new self();
    }
}
