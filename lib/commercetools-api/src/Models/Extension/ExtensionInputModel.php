<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ExtensionInputModel extends JsonObjectModel implements ExtensionInput
{
    /**
     * @var ?Reference
     */
    protected $resource;

    /**
     * @var ?string
     */
    protected $action;

    public function __construct(
        Reference $resource = null,
        string $action = null
    ) {
        $this->resource = $resource;
        $this->action = $action;
    }

    /**
     * @return null|Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ExtensionInput::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->resource = $className::of($data);
        }

        return $this->resource;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionInput::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }
}
