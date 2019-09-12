<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\JsonObjectModel;

final class ImportResourceModel extends JsonObjectModel implements ImportResource
{
    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        string $key = null
    ) {
        $this->key = $key;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportResource::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
