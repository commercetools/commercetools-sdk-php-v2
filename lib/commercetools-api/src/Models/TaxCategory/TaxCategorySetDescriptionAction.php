<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObject;

interface TaxCategorySetDescriptionAction extends TaxCategoryUpdateAction
{
    
    const FIELD_DESCRIPTION = 'description';

    /**
     *
     * @return string|null
     */
    public function getDescription();
    public function setDescription(?string $description): void;
}