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
 * @extends MapperSequence<ApiClientDraft>
 * @method ApiClientDraft current()
 * @method ApiClientDraft at($offset)
 */
class ApiClientDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ApiClientDraft $value
     * @psalm-param ApiClientDraft|stdClass $value
     * @return ApiClientDraftCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ApiClientDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApiClientDraft
     */
    protected function mapper()
    {
        return function(int $index): ?ApiClientDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ApiClientDraftModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}