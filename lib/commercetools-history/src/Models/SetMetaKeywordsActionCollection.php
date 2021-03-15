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
 * @extends MapperSequence<SetMetaKeywordsAction>
 * @method SetMetaKeywordsAction current()
 * @method SetMetaKeywordsAction at($offset)
 */
class SetMetaKeywordsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMetaKeywordsAction $value
     * @psalm-param SetMetaKeywordsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMetaKeywordsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMetaKeywordsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMetaKeywordsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetMetaKeywordsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMetaKeywordsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
