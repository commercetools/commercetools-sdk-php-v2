<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<LocalizableTextAttribute>
 * @method LocalizableTextAttribute current()
 * @method LocalizableTextAttribute at($offset)
 */
class LocalizableTextAttributeCollection extends MapperSequence
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
        return function (int $index): ?LocalizableTextAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LocalizableTextAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
