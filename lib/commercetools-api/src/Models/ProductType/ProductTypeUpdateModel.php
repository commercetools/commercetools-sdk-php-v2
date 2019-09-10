<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductTypeUpdateModel extends JsonObjectModel implements ProductTypeUpdate
{
    /**
     * @var ?ProductTypeUpdateActionCollection
     */
    protected $actions;

    /**
     * @var ?int
     */
    protected $version;

    public function __construct(
        ProductTypeUpdateActionCollection $actions = null,
        int $version = null
    ) {
        $this->actions = $actions;
        $this->version = $version;
    }

    /**
     * @return null|ProductTypeUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductTypeUpdate::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = ProductTypeUpdateActionCollection::fromArray($data);
        }

        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductTypeUpdate::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    public function setActions(?ProductTypeUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
}
