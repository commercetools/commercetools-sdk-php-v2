<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectChangeProductSearchIndexingEnabledActionModel extends JsonObjectModel implements ProjectChangeProductSearchIndexingEnabledAction
{
    public const DISCRIMINATOR_VALUE = 'changeProductSearchIndexingEnabled';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?bool
     */
    protected $enabled;

    /**
     *
     * @var ?string
     */
    protected $mode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $enabled = null,
        ?string $mode = null,
        ?string $action = null
    ) {
        $this->enabled = $enabled;
        $this->mode = $mode;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <ul>
     * <li>If <code>false</code>, the indexing of <a href="ctp:api:type:Product">Product</a> information will stop and the <a href="/../api/projects/products-search">Product Projection Search</a> as well as the <a href="/../api/projects/products-suggestions">Product Suggestions</a> endpoint will not be available anymore for this Project. The Project's <a href="ctp:api:type:SearchIndexingConfiguration">SearchIndexingConfiguration</a> <code>status</code> for <code>products</code> will be changed to <code>&quot;Deactivated&quot;</code>.</li>
     * <li>If <code>true</code>, the indexing of <a href="ctp:api:type:Product">Product</a> information will start and the <a href="/../api/projects/products-search">Product Projection Search</a> as well as the <a href="/../api/projects/products-suggestions">Product Suggestions</a> endpoint will become available soon after for this Project. Proportional to the amount of information being indexed, the Project's <a href="ctp:api:type:SearchIndexingConfiguration">SearchIndexingConfiguration</a> <code>status</code> for <code>products</code> will be shown as <code>&quot;Indexing&quot;</code> during this time. As soon as the indexing has finished, the configuration status will be changed to <code>&quot;Activated&quot;</code> making the aforementioned endpoints fully available for this Project.</li>
     * </ul>
     *
     *
     * @return null|bool
     */
    public function getEnabled()
    {
        if (is_null($this->enabled)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_ENABLED);
            if (is_null($data)) {
                return null;
            }
            $this->enabled = (bool) $data;
        }

        return $this->enabled;
    }

    /**
     * <p>Controls whether the action should apply to <a href="/../api/projects/products-search">Product Projection Search</a> or to <a href="/../api/projects/product-search">Product Search</a>.</p>
     *
     *
     * @return null|string
     */
    public function getMode()
    {
        if (is_null($this->mode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->mode = (string) $data;
        }

        return $this->mode;
    }


    /**
     * @param ?bool $enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * @param ?string $mode
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
    }
}
