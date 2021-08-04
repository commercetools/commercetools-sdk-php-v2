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
 * @extends AttributeCollection<LocalizableTextAttribute>
 * @method LocalizableTextAttribute current()
 * @method LocalizableTextAttribute end()
 * @method LocalizableTextAttribute at($offset)
 */
class LocalizableTextAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert LocalizableTextAttribute $value
     * @psalm-param LocalizableTextAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocalizableTextAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizableTextAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizableTextAttribute
     */
    protected function mapper()
    {
        return function (?int $index): ?LocalizableTextAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LocalizableTextAttribute $data */
                $data = LocalizableTextAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
