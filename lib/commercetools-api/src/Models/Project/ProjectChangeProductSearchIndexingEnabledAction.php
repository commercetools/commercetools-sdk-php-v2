<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeProductSearchIndexingEnabledAction extends ProjectUpdateAction
{
    public const FIELD_ENABLED = 'enabled';
    public const FIELD_MODE = 'mode';

    /**
     * <p>Whether to enable product indexing for the storefront search APIs selected by <code>mode</code>.</p>
     * <ul>
     * <li>If <code>true</code>, indexing starts for the selected API and the corresponding status changes to <code>&quot;Indexing&quot;</code>. After indexing finishes, the status changes to <code>&quot;Activated&quot;</code> and the selected API becomes available.</li>
     * <li>If <code>false</code>, indexing stops and the selected API become unavailable. The corresponding <a href="ctp:api:type:SearchIndexingConfiguration">SearchIndexingConfiguration</a> <code>status</code> changes to <code>&quot;Deactivated&quot;</code>.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getEnabled();

    /**
     * <p>Controls whether the action should apply to <a href="/api/projects/product-projection-search">Product Projection Search</a> or to <a href="/api/projects/product-search">Product Search</a>.</p>
     *

     * @return null|string
     */
    public function getMode();

    /**
     * @param ?bool $enabled
     */
    public function setEnabled(?bool $enabled): void;

    /**
     * @param ?string $mode
     */
    public function setMode(?string $mode): void;
}
