<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<SearchIndexingInProgressError>
 * @method SearchIndexingInProgressError current()
 * @method SearchIndexingInProgressError at($offset)
 */
class SearchIndexingInProgressErrorCollection extends ErrorObjectCollection
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
                /** @var SearchIndexingInProgressError $data */
                $data = SearchIndexingInProgressErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
