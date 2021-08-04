<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Productvariants\AttributeCollection;
use stdClass;

/**
 * @extends AttributeCollection<LocalizableEnumSetAttribute>
 * @method LocalizableEnumSetAttribute current()
 * @method LocalizableEnumSetAttribute at($offset)
 */
class LocalizableEnumSetAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert LocalizableEnumSetAttribute $value
     * @psalm-param LocalizableEnumSetAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocalizableEnumSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizableEnumSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizableEnumSetAttribute
     */
    protected function mapper()
    {
        return function (?int $index): ?LocalizableEnumSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LocalizableEnumSetAttribute $data */
                $data = LocalizableEnumSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
