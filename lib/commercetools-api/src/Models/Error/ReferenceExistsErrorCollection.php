<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReferenceExistsError>
 * @method ReferenceExistsError current()
 * @method ReferenceExistsError at($offset)
 */
class ReferenceExistsErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ReferenceExistsError $value
     * @psalm-param ReferenceExistsError|stdClass $value
     * @return ReferenceExistsErrorCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ReferenceExistsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReferenceExistsError
     */
    protected function mapper()
    {
        return function(int $index): ?ReferenceExistsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReferenceExistsErrorModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}