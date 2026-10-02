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
     * <p>Whether to enable product indexing for the storefront search APIs selected by <code>mode</code>.</p>
     * <ul>
     * <li>If <code>true</code>, indexing starts for the selected API and the corresponding status changes to <code>&quot;Indexing&quot;</code>. After indexing finishes, the status changes to <code>&quot;Activated&quot;</code> and the selected API becomes available.</li>
     * <li>If <code>false</code>, indexing stops and the selected API become unavailable. The corresponding <a href="ctp:api:type:SearchIndexingConfiguration">SearchIndexingConfiguration</a> <code>status</code> changes to <code>&quot;Deactivated&quot;</code>.</li>
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
     * <p>Controls whether the action should apply to <a href="/api/projects/product-projection-search">Product Projection Search</a> or to <a href="/api/projects/product-search">Product Search</a>.</p>
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
