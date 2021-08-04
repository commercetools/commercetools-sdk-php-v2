<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ApiClient>
 * @method ApiClient current()
 * @method ApiClient end()
 * @method ApiClient at($offset)
 */
class ApiClientCollection extends MapperSequence
{
    /**
     * @psalm-assert ApiClient $value
     * @psalm-param ApiClient|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApiClientCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApiClient) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApiClient
     */
    protected function mapper()
    {
        return function (?int $index): ?ApiClient {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApiClient $data */
                $data = ApiClientModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
