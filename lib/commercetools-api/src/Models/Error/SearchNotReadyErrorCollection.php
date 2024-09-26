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
 * @extends ErrorObjectCollection<SearchNotReadyError>
 * @method SearchNotReadyError current()
 * @method SearchNotReadyError end()
 * @method SearchNotReadyError at($offset)
 */
class SearchNotReadyErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert SearchNotReadyError $value
     * @psalm-param SearchNotReadyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchNotReadyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchNotReadyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchNotReadyError
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchNotReadyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchNotReadyError $data */
                $data = SearchNotReadyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
