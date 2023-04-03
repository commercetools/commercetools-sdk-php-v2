<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\GraphQLErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GraphQLErrorObjectCollection<GraphQLProjectNotConfiguredForLanguagesError>
 * @method GraphQLProjectNotConfiguredForLanguagesError current()
 * @method GraphQLProjectNotConfiguredForLanguagesError end()
 * @method GraphQLProjectNotConfiguredForLanguagesError at($offset)
 */
class GraphQLProjectNotConfiguredForLanguagesErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLProjectNotConfiguredForLanguagesError $value
     * @psalm-param GraphQLProjectNotConfiguredForLanguagesError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLProjectNotConfiguredForLanguagesErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLProjectNotConfiguredForLanguagesError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLProjectNotConfiguredForLanguagesError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLProjectNotConfiguredForLanguagesError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLProjectNotConfiguredForLanguagesError $data */
                $data = GraphQLProjectNotConfiguredForLanguagesErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
