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
 * @extends MapperSequence<UnresolvedReferences>
 * @method UnresolvedReferences current()
 * @method UnresolvedReferences end()
 * @method UnresolvedReferences at($offset)
 */
class UnresolvedReferencesCollection extends MapperSequence
{
    /**
     * @psalm-assert UnresolvedReferences $value
     * @psalm-param UnresolvedReferences|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UnresolvedReferencesCollection
     */
    public function add($value)
    {
        if (!$value instanceof UnresolvedReferences) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UnresolvedReferences
     */
    protected function mapper()
    {
        return function (?int $index): ?UnresolvedReferences {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var UnresolvedReferences $data */
                $data = UnresolvedReferencesModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
