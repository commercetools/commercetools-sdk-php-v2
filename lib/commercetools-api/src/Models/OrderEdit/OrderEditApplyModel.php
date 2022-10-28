<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderEditApplyModel extends JsonObjectModel implements OrderEditApply
{
    /**
     *
     * @var ?int
     */
    protected $editVersion;

    /**
     *
     * @var ?int
     */
    protected $resourceVersion;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $editVersion = null,
        ?int $resourceVersion = null
    ) {
        $this->editVersion = $editVersion;
        $this->resourceVersion = $resourceVersion;
    }

    /**
     *
     * @return null|int
     */
    public function getEditVersion()
    {
        if (is_null($this->editVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_EDIT_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->editVersion = (int) $data;
        }

        return $this->editVersion;
    }

    /**
     *
     * @return null|int
     */
    public function getResourceVersion()
    {
        if (is_null($this->resourceVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_RESOURCE_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->resourceVersion = (int) $data;
        }

        return $this->resourceVersion;
    }


    /**
     * @param ?int $editVersion
     */
    public function setEditVersion(?int $editVersion): void
    {
        $this->editVersion = $editVersion;
    }

    /**
     * @param ?int $resourceVersion
     */
    public function setResourceVersion(?int $resourceVersion): void
    {
        $this->resourceVersion = $resourceVersion;
    }
}
