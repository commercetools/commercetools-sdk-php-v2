<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerSetTitleAction extends CustomerUpdateAction
{
    
    const FIELD_TITLE = 'title';

    /**
     *
     * @return string|null
     */
    public function getTitle();
    public function setTitle(?string $title): void;
}