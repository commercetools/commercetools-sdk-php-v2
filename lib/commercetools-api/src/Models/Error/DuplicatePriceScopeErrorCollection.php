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
 * @extends MapperSequence<DuplicatePriceScopeError>
 * @method DuplicatePriceScopeError current()
 * @method DuplicatePriceScopeError at($offset)
 */
class DuplicatePriceScopeErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert DuplicatePriceScopeError $value
     * @psalm-param DuplicatePriceScopeError|stdClass $value
     * @return DuplicatePriceScopeErrorCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof DuplicatePriceScopeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DuplicatePriceScopeError
     */
    protected function mapper()
    {
        return function(int $index): ?DuplicatePriceScopeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DuplicatePriceScopeErrorModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}