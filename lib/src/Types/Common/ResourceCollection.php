<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface ResourceCollection extends Collection
{
    /**
     * @param $index
     * @return Resource
     */
    public function at($index);

    /**
     * @return Resource
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Resource
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return Resource
     */
    public function byId($id);

}
