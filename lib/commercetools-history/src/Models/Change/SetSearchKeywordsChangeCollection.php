<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetSearchKeywordsChange>
 * @method SetSearchKeywordsChange current()
 * @method SetSearchKeywordsChange at($offset)
 */
class SetSearchKeywordsChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetSearchKeywordsChange $value
     * @psalm-param SetSearchKeywordsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSearchKeywordsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSearchKeywordsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSearchKeywordsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetSearchKeywordsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetSearchKeywordsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
