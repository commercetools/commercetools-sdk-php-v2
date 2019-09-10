<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\JsonObject;

interface ApiClientDraft extends JsonObject
{
    
    const FIELD_NAME = 'name';
    const FIELD_SCOPE = 'scope';
    const FIELD_DELETE_DAYS_AFTER_CREATION = 'deleteDaysAfterCreation';

    /**
     *
     * @return string|null
     */
    public function getName();
    
    /**
     *
     * @return string|null
     */
    public function getScope();
    
    /**
     *
     * @return int|null
     */
    public function getDeleteDaysAfterCreation();
    public function setName(?string $name): void;
    
    public function setScope(?string $scope): void;
    
    public function setDeleteDaysAfterCreation(?int $deleteDaysAfterCreation): void;
}