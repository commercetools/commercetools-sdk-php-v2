<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\UpdateActionCollection;


interface ProjectUpdateActionCollection extends UpdateActionCollection {
    /**
     * @param $index
     * @return ProjectUpdateAction
     */
    public function at($index);

    /**
     * @return ProjectUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProjectUpdateAction
     */
    public function map($data, $index);
}
