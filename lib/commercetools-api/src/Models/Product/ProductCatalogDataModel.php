<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductCatalogDataModel extends JsonObjectModel implements ProductCatalogData
{
    /**
     *
     * @var ?bool
     */
    protected $published;

    /**
     *
     * @var ?ProductData
     */
    protected $current;

    /**
     *
     * @var ?ProductData
     */
    protected $staged;

    /**
     *
     * @var ?bool
     */
    protected $hasStagedChanges;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $published = null,
        ?ProductData $current = null,
        ?ProductData $staged = null,
        ?bool $hasStagedChanges = null
    ) {
        $this->published = $published;
        $this->current = $current;
        $this->staged = $staged;
        $this->hasStagedChanges = $hasStagedChanges;
    }

    /**
     * <p><code>true</code> if the Product is published.</p>
     *
     *
     * @return null|bool
     */
    public function getPublished()
    {
        if (is_null($this->published)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_PUBLISHED);
            if (is_null($data)) {
                return null;
            }
            $this->published = (bool) $data;
        }

        return $this->published;
    }

    /**
     * <p>Current (published) data of the Product.</p>
     *
     *
     * @return null|ProductData
     */
    public function getCurrent()
    {
        if (is_null($this->current)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CURRENT);
            if (is_null($data)) {
                return null;
            }

            $this->current = ProductDataModel::of($data);
        }

        return $this->current;
    }

    /**
     * <p>Staged (unpublished) data of the Product.</p>
     *
     *
     * @return null|ProductData
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }

            $this->staged = ProductDataModel::of($data);
        }

        return $this->staged;
    }

    /**
     * <p><code>true</code> if the <code>staged</code> data is different from the <code>current</code> data.</p>
     *
     *
     * @return null|bool
     */
    public function getHasStagedChanges()
    {
        if (is_null($this->hasStagedChanges)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_HAS_STAGED_CHANGES);
            if (is_null($data)) {
                return null;
            }
            $this->hasStagedChanges = (bool) $data;
        }

        return $this->hasStagedChanges;
    }


    /**
     * @param ?bool $published
     */
    public function setPublished(?bool $published): void
    {
        $this->published = $published;
    }

    /**
     * @param ?ProductData $current
     */
    public function setCurrent(?ProductData $current): void
    {
        $this->current = $current;
    }

    /**
     * @param ?ProductData $staged
     */
    public function setStaged(?ProductData $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?bool $hasStagedChanges
     */
    public function setHasStagedChanges(?bool $hasStagedChanges): void
    {
        $this->hasStagedChanges = $hasStagedChanges;
    }
}
