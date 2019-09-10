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
 * @extends MapperSequence<Extension>
 *
 * @method Extension current()
 * @method Extension at($offset)
 */
class ExtensionCollection extends MapperSequence
{
    /**
     * @psalm-assert Extension $value
     * @psalm-param Extension|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ExtensionCollection
     */
    public function add($value)
    {
        if (!$value instanceof Extension) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Extension
     */
    protected function mapper()
    {
        return function (int $index): ?Extension {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
