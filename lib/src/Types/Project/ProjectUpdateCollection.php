<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\UpdateCollection;


interface ProjectUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return ProjectUpdate
     */
    public function at($index);

    /**
     * @return ProjectUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProjectUpdate
     */
    public function map($data, $index);
}
