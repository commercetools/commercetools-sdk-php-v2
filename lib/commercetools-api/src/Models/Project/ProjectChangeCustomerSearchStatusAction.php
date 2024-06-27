<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeCustomerSearchStatusAction extends ProjectUpdateAction
{
    public const FIELD_STATUS = 'status';

    /**
     * <p>Activates or deactivates the <a href="/../api/projects/customer-search">Customer Search</a> feature. Activation will trigger building a search index for the Customers in the Project.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;
}
