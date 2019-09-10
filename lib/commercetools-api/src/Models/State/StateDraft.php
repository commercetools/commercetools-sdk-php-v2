<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;

interface StateDraft extends JsonObject
{
    
    const FIELD_KEY = 'key';
    const FIELD_TYPE = 'type';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_INITIAL = 'initial';
    const FIELD_ROLES = 'roles';
    const FIELD_TRANSITIONS = 'transitions';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return string|null
     */
    public function getType();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    
    /**
     *
     * @return bool|null
     */
    public function getInitial();
    
    /**
     *
     * @return array|null
     */
    public function getRoles();
    
    /**
     *
     * @return StateResourceIdentifierCollection|null
     */
    public function getTransitions();
    public function setKey(?string $key): void;
    
    public function setType(?string $type): void;
    
    public function setName(?LocalizedString $name): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setInitial(?bool $initial): void;
    
    public function setRoles(?array $roles): void;
    
    public function setTransitions(?StateResourceIdentifierCollection $transitions): void;
}