<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<JavascriptPredicate>
 *
 * @method JavascriptPredicate current()
 * @method JavascriptPredicate at($offset)
 */
class JavascriptPredicateCollection extends MapperSequence
{
    /**
     * @psalm-assert JavascriptPredicate $value
     * @psalm-param JavascriptPredicate|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return JavascriptPredicateCollection
     */
    public function add($value)
    {
        if (!$value instanceof JavascriptPredicate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?JavascriptPredicate
     */
    protected function mapper()
    {
        return function (int $index): ?JavascriptPredicate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = JavascriptPredicateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
