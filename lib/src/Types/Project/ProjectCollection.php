<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Base\Collection;

interface ProjectCollection extends Collection {
    /**
     * @param $index
     * @return Project
     */
    public function at($index);

    /**
     * @return Project
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Project
     */
    public function map($data, $index);
}
