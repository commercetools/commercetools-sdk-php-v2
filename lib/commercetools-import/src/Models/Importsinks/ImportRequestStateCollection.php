<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportRequestState>
 *
 * @method ImportRequestState current()
 * @method ImportRequestState at($offset)
 */
class ImportRequestStateCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportRequestState $value
     * @psalm-param ImportRequestState|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ImportRequestStateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportRequestState) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportRequestState
     */
    protected function mapper()
    {
        return function (int $index): ?ImportRequestState {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportRequestStateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
