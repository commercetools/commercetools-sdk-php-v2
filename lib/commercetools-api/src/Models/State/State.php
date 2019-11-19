<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LoggedResource;
use DateTimeImmutable;

interface State extends LoggedResource
{
    const FIELD_KEY = 'key';
    const FIELD_TYPE = 'type';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_INITIAL = 'initial';
    const FIELD_BUILT_IN = 'builtIn';
    const FIELD_ROLES = 'roles';
    const FIELD_TRANSITIONS = 'transitions';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|bool
     */
    public function getInitial();

    /**
     * @return null|bool
     */
    public function getBuiltIn();

    /**
     * @return null|array
     */
    public function getRoles();

    /**
     * @return null|StateReferenceCollection
     */
    public function getTransitions();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setKey(?string $key): void;

    public function setType(?string $type): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setInitial(?bool $initial): void;

    public function setBuiltIn(?bool $builtIn): void;

    public function setRoles(?array $roles): void;

    public function setTransitions(?StateReferenceCollection $transitions): void;
}
