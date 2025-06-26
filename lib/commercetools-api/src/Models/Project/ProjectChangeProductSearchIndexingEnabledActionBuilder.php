<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectChangeProductSearchIndexingEnabledAction>
 */
final class ProjectChangeProductSearchIndexingEnabledActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $enabled;

    /**

     * @var ?string
     */
    private $mode;

    /**
     * <ul>
     * <li>If <code>false</code>, the indexing of <a href="ctp:api:type:Product">Product</a> information will stop and the <a href="/../api/projects/product-projection-search">Product Projection Search</a> as well as the <a href="/../api/projects/search-term-suggestions">Search Term Suggestions</a> API will no longer be available for this Project. The Project's <a href="ctp:api:type:SearchIndexingConfiguration">SearchIndexingConfiguration</a> <code>status</code> for <code>products</code> will be changed to <code>&quot;Deactivated&quot;</code>.</li>
     * <li>If <code>true</code>, the indexing of <a href="ctp:api:type:Product">Product</a> information will start and the <a href="/../api/projects/product-projection-search">Product Projection Search</a> as well as the <a href="/../api/projects/search-term-suggestions">Search Term Suggestions</a> API will become available soon after for this Project. Proportional to the amount of information being indexed, the Project's <a href="ctp:api:type:SearchIndexingConfiguration">SearchIndexingConfiguration</a> <code>status</code> for <code>products</code> will be shown as <code>&quot;Indexing&quot;</code> during this time. As soon as the indexing has finished, the configuration status will be changed to <code>&quot;Activated&quot;</code> making the aforementioned APIs fully available for this Project.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * <p>Controls whether the action should apply to <a href="/../api/projects/product-projection-search">Product Projection Search</a> or to <a href="/../api/projects/product-search">Product Search</a>.</p>
     *

     * @return null|string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param ?bool $enabled
     * @return $this
     */
    public function withEnabled(?bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @param ?string $mode
     * @return $this
     */
    public function withMode(?string $mode)
    {
        $this->mode = $mode;

        return $this;
    }


    public function build(): ProjectChangeProductSearchIndexingEnabledAction
    {
        return new ProjectChangeProductSearchIndexingEnabledActionModel(
            $this->enabled,
            $this->mode
        );
    }

    public static function of(): ProjectChangeProductSearchIndexingEnabledActionBuilder
    {
        return new self();
    }
}
