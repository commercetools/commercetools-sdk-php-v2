<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Base\Collection;

interface ReviewRatingStatisticsCollection extends Collection
{
    /**
     * @param $index
     * @return ReviewRatingStatistics
     */
    public function at($index);

    /**
     * @return ReviewRatingStatistics
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewRatingStatistics
     */
    public function map($data, $index);
}
