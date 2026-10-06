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
     * <p>Whether to enable product indexing for the storefront search APIs selected by <code>mode</code>.</p>
     * <ul>
     * <li>If <code>true</code>, indexing starts for the selected API and the corresponding status changes to <code>&quot;Indexing&quot;</code>. After indexing finishes, the status changes to <code>&quot;Activated&quot;</code> and the selected API becomes available.</li>
     * <li>If <code>false</code>, indexing stops and the selected API become unavailable. The corresponding <a href="ctp:api:type:SearchIndexingConfiguration">SearchIndexingConfiguration</a> <code>status</code> changes to <code>&quot;Deactivated&quot;</code>.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * <p>Controls whether the action should apply to <a href="/api/projects/product-projection-search">Product Projection Search</a> or to <a href="/api/projects/product-search">Product Search</a>.</p>
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
