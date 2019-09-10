<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObjectModel;

final class OrderEditApplyModel extends JsonObjectModel implements OrderEditApply
{
    /**
     * @var ?int
     */
    protected $resourceVersion;

    /**
     * @var ?int
     */
    protected $editVersion;

    public function __construct(
        int $resourceVersion = null,
        int $editVersion = null
    ) {
        $this->resourceVersion = $resourceVersion;
        $this->editVersion = $editVersion;
    }

    /**
     * @return null|int
     */
    public function getResourceVersion()
    {
        if (is_null($this->resourceVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OrderEditApply::FIELD_RESOURCE_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->resourceVersion = (int) $data;
        }

        return $this->resourceVersion;
    }

    /**
     * @return null|int
     */
    public function getEditVersion()
    {
        if (is_null($this->editVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OrderEditApply::FIELD_EDIT_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->editVersion = (int) $data;
        }

        return $this->editVersion;
    }

    public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }

    public function setEditVersion(?int $editVersion): void
    {
        $this->editVersion = $editVersion;
    }
}
