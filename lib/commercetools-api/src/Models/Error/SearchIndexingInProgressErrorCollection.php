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
 * @extends MapperSequence<SearchIndexingInProgressError>
 * @method SearchIndexingInProgressError current()
 * @method SearchIndexingInProgressError at($offset)
 */
class SearchIndexingInProgressErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert SearchIndexingInProgressError $value
     * @psalm-param SearchIndexingInProgressError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchIndexingInProgressErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchIndexingInProgressError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchIndexingInProgressError
     */
    protected function mapper()
    {
        return function (int $index): ?SearchIndexingInProgressError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SearchIndexingInProgressErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
