<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<LoggedResource>
 * @method LoggedResource current()
 * @method LoggedResource at($offset)
 */
class LoggedResourceCollection extends MapperSequence
{
    /**
     * @psalm-assert LoggedResource $value
     * @psalm-param LoggedResource|stdClass $value
     * @return LoggedResourceCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof LoggedResource) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LoggedResource
     */
    protected function mapper()
    {
        return function(int $index): ?LoggedResource {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LoggedResourceModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}