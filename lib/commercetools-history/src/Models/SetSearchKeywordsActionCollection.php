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
 * @extends MapperSequence<SetSearchKeywordsAction>
 * @method SetSearchKeywordsAction current()
 * @method SetSearchKeywordsAction at($offset)
 */
class SetSearchKeywordsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetSearchKeywordsAction $value
     * @psalm-param SetSearchKeywordsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSearchKeywordsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSearchKeywordsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSearchKeywordsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetSearchKeywordsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetSearchKeywordsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
