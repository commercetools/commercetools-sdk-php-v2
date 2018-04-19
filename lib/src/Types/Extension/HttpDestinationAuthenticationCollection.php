<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\Collection;

interface HttpDestinationAuthenticationCollection extends Collection
{
    /**
     * @param $index
     * @return HttpDestinationAuthentication
     */
    public function at($index);

    /**
     * @return HttpDestinationAuthentication
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return HttpDestinationAuthentication
     */
    public function map($data, $index);
}
