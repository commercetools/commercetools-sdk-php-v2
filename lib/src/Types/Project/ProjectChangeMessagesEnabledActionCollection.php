<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionCollection;


interface ProjectChangeMessagesEnabledActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @param $index
     * @return ProjectChangeMessagesEnabledAction
     */
    public function at($index);

    /**
     * @return ProjectChangeMessagesEnabledAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProjectChangeMessagesEnabledAction
     */
    public function map($data, $index);
}
