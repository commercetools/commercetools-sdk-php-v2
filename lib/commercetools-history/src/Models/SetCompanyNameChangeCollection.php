<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetCompanyNameChange>
 * @method SetCompanyNameChange current()
 * @method SetCompanyNameChange at($offset)
 */
class SetCompanyNameChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCompanyNameChange $value
     * @psalm-param SetCompanyNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCompanyNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCompanyNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCompanyNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetCompanyNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCompanyNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
