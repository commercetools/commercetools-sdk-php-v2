<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of ImportResource
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method ImportResource current()
 * @method ImportResource at($offset)
 */
class ImportResourceCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportResourceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportResource) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (int $index): ?ImportResource {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ImportResourceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
