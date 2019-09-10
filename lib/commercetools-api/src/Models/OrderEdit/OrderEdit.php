<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface OrderEdit extends LoggedResource
{
    const FIELD_KEY = 'key';
    const FIELD_RESOURCE = 'resource';
    const FIELD_STAGED_ACTIONS = 'stagedActions';
    const FIELD_CUSTOM = 'custom';
    const FIELD_RESULT = 'result';
    const FIELD_COMMENT = 'comment';

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|OrderReference
     */
    public function getResource();

    /**
     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|OrderEditResult
     */
    public function getResult();

    /**
     * @return null|string
     */
    public function getComment();

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setKey(?string $key): void;

    public function setResource(?OrderReference $resource): void;

    public function setStagedActions(?StagedOrderUpdateActionCollection $stagedActions): void;

    public function setCustom(?CustomFields $custom): void;

    public function setResult(?OrderEditResult $result): void;

    public function setComment(?string $comment): void;
}
