<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<LineItemQuantityAboveLimitError>
 * @method LineItemQuantityAboveLimitError current()
 * @method LineItemQuantityAboveLimitError end()
 * @method LineItemQuantityAboveLimitError at($offset)
 */
class LineItemQuantityAboveLimitErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert LineItemQuantityAboveLimitError $value
     * @psalm-param LineItemQuantityAboveLimitError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LineItemQuantityAboveLimitErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItemQuantityAboveLimitError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItemQuantityAboveLimitError
     */
    protected function mapper()
    {
        return function (?int $index): ?LineItemQuantityAboveLimitError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LineItemQuantityAboveLimitError $data */
                $data = LineItemQuantityAboveLimitErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
