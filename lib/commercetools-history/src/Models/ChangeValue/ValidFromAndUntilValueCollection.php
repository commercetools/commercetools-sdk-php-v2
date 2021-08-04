<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ValidFromAndUntilValue>
 * @method ValidFromAndUntilValue current()
 * @method ValidFromAndUntilValue end()
 * @method ValidFromAndUntilValue at($offset)
 */
class ValidFromAndUntilValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ValidFromAndUntilValue $value
     * @psalm-param ValidFromAndUntilValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ValidFromAndUntilValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ValidFromAndUntilValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ValidFromAndUntilValue
     */
    protected function mapper()
    {
        return function (?int $index): ?ValidFromAndUntilValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ValidFromAndUntilValue $data */
                $data = ValidFromAndUntilValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
