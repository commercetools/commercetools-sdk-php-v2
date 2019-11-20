<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObjectModel;

final class CustomFieldNumberTypeModel extends JsonObjectModel implements CustomFieldNumberType
{
    const DISCRIMINATOR_VALUE = 'Number';

    /**
     * @var ?string
     */
    protected $name;

    public function __construct(
    ) {
        $this->name = static::DISCRIMINATOR_VALUE;
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
}
