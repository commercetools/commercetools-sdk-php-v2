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
 * @extends MapperSequence<ProjectCategoryRecommendationPagedQueryResponse>
 * @method ProjectCategoryRecommendationPagedQueryResponse current()
 * @method ProjectCategoryRecommendationPagedQueryResponse at($offset)
 */
class ProjectCategoryRecommendationPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectCategoryRecommendationPagedQueryResponse $value
     * @psalm-param ProjectCategoryRecommendationPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectCategoryRecommendationPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectCategoryRecommendationPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectCategoryRecommendationPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ProjectCategoryRecommendationPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectCategoryRecommendationPagedQueryResponse $data */
                $data = ProjectCategoryRecommendationPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
