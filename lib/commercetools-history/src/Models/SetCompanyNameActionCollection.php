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
 * @extends MapperSequence<SetCompanyNameAction>
 * @method SetCompanyNameAction current()
 * @method SetCompanyNameAction at($offset)
 */
class SetCompanyNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCompanyNameAction $value
     * @psalm-param SetCompanyNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCompanyNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCompanyNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCompanyNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCompanyNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCompanyNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
