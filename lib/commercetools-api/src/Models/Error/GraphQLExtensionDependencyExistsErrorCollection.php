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
 * @extends GraphQLErrorObjectCollection<GraphQLExtensionDependencyExistsError>
 * @method GraphQLExtensionDependencyExistsError current()
 * @method GraphQLExtensionDependencyExistsError end()
 * @method GraphQLExtensionDependencyExistsError at($offset)
 */
class GraphQLExtensionDependencyExistsErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExtensionDependencyExistsError $value
     * @psalm-param GraphQLExtensionDependencyExistsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExtensionDependencyExistsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExtensionDependencyExistsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExtensionDependencyExistsError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExtensionDependencyExistsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExtensionDependencyExistsError $data */
                $data = GraphQLExtensionDependencyExistsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
