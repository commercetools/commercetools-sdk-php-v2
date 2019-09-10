<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;

interface DiscountCodeSetMaxApplicationsAction extends DiscountCodeUpdateAction
{
    
    const FIELD_MAX_APPLICATIONS = 'maxApplications';

    /**
     *
     * @return int|null
     */
    public function getMaxApplications();
    public function setMaxApplications(?int $maxApplications): void;
}