<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ApiClientPagedQueryResponse>
 * @method ApiClientPagedQueryResponse current()
 * @method ApiClientPagedQueryResponse at($offset)
 */
class ApiClientPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ApiClientPagedQueryResponse $value
     * @psalm-param ApiClientPagedQueryResponse|stdClass $value
     * @return ApiClientPagedQueryResponseCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ApiClientPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApiClientPagedQueryResponse
     */
    protected function mapper()
    {
        return function(int $index): ?ApiClientPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ApiClientPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}