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
     * <ul>
     * <li>If <code>false</code>, the indexing of <a href="ctp:api:type:Product">Product</a> information will stop and the <a href="/../api/projects/products-search">Product Projection Search</a> as well as the <a href="/../api/projects/products-suggestions">Product Suggestions</a> endpoint will not be available anymore for this Project. The Project's <a href="ctp:api:type:SearchIndexingConfiguration">SearchIndexingConfiguration</a> <code>status</code> for <code>products</code> will be changed to <code>&quot;Deactivated&quot;</code>.</li>
     * <li>If <code>true</code>, the indexing of <a href="ctp:api:type:Product">Product</a> information will start and the <a href="/../api/projects/products-search">Product Projection Search</a> as well as the <a href="/../api/projects/products-suggestions">Product Suggestions</a> endpoint will become available soon after for this Project. Proportional to the amount of information being indexed, the Project's <a href="ctp:api:type:SearchIndexingConfiguration">SearchIndexingConfiguration</a> <code>status</code> for <code>products</code> will be shown as <code>&quot;Indexing&quot;</code> during this time. As soon as the indexing has finished, the configuration status will be changed to <code>&quot;Activated&quot;</code> making the aforementioned endpoints fully available for this Project.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getEnabled();

    /**
     * <p>Controls whether the action should apply to <a href="/../api/projects/products-search">Product Projection Search</a> or to <a href="/../api/projects/product-search">Product Search</a>.</p>
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
