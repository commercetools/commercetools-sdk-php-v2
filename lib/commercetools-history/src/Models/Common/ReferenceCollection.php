<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Reference>
 * @method Reference current()
 * @method Reference end()
 * @method Reference at($offset)
 */
class ReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert Reference $value
     * @psalm-param Reference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof Reference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Reference
     */
    protected function mapper()
    {
        return function (?int $index): ?Reference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Reference $data */
                $data = ReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
