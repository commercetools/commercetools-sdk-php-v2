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
 * @extends MapperSequence<InvalidSubjectError>
 * @method InvalidSubjectError current()
 * @method InvalidSubjectError at($offset)
 */
class InvalidSubjectErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert InvalidSubjectError $value
     * @psalm-param InvalidSubjectError|stdClass $value
     * @return InvalidSubjectErrorCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof InvalidSubjectError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidSubjectError
     */
    protected function mapper()
    {
        return function(int $index): ?InvalidSubjectError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InvalidSubjectErrorModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}