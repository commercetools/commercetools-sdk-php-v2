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
 * @extends MapperSequence<TextSetAttribute>
 * @method TextSetAttribute current()
 * @method TextSetAttribute at($offset)
 */
class TextSetAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert TextSetAttribute $value
     * @psalm-param TextSetAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TextSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof TextSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TextSetAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?TextSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TextSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
