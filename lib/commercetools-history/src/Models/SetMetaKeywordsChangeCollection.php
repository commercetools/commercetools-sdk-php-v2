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
 * @extends MapperSequence<SetMetaKeywordsChange>
 * @method SetMetaKeywordsChange current()
 * @method SetMetaKeywordsChange at($offset)
 */
class SetMetaKeywordsChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMetaKeywordsChange $value
     * @psalm-param SetMetaKeywordsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMetaKeywordsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMetaKeywordsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMetaKeywordsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetMetaKeywordsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMetaKeywordsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
