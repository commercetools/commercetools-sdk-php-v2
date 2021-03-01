<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SearchDeactivatedError>
 * @method SearchDeactivatedError current()
 * @method SearchDeactivatedError at($offset)
 */
class SearchDeactivatedErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert SearchDeactivatedError $value
     * @psalm-param SearchDeactivatedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchDeactivatedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchDeactivatedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchDeactivatedError
     */
    protected function mapper()
    {
        return function (int $index): ?SearchDeactivatedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SearchDeactivatedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
