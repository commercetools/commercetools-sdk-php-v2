<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExtensionInput>
 *
 * @method ExtensionInput current()
 * @method ExtensionInput at($offset)
 */
class ExtensionInputCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionInput $value
     * @psalm-param ExtensionInput|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ExtensionInputCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionInput) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionInput
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionInput {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionInputModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
