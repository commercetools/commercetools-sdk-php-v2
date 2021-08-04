<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\CategoryRecommendations;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProjectCategoryRecommendationMeta>
 * @method ProjectCategoryRecommendationMeta current()
 * @method ProjectCategoryRecommendationMeta at($offset)
 */
class ProjectCategoryRecommendationMetaCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectCategoryRecommendationMeta $value
     * @psalm-param ProjectCategoryRecommendationMeta|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectCategoryRecommendationMetaCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectCategoryRecommendationMeta) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectCategoryRecommendationMeta
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectCategoryRecommendationMeta {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectCategoryRecommendationMeta $data */
                $data = ProjectCategoryRecommendationMetaModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
