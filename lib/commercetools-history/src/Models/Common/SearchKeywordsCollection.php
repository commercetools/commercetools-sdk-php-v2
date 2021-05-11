<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SearchKeywords>
 * @method SearchKeywords current()
 * @method SearchKeywords at($offset)
 */
class SearchKeywordsCollection extends MapperSequence
{
    /**
     * @psalm-assert SearchKeywords $value
     * @psalm-param SearchKeywords|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchKeywordsCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchKeywords) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchKeywords
     */
    protected function mapper()
    {
        return function (int $index): ?SearchKeywords {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchKeywords $data */
                $data = SearchKeywordsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
