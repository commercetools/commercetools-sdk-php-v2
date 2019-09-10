<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObjectModel;

final class CustomFieldTimeTypeModel extends JsonObjectModel implements CustomFieldTimeType
{
    const DISCRIMINATOR_VALUE = 'Time';

    /**
     * @var ?string
     */
    protected $name;

    public function __construct(
        string $name = null
    ) {
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(FieldType::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
