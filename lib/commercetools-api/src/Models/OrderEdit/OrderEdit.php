<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OrderEdit extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_STAGED_ACTIONS = 'stagedActions';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_RESULT = 'result';
    public const FIELD_COMMENT = 'comment';

    /**
     * <p>The unique ID of the OrderEdit.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the OrderEdit.</p>
     *
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
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Unique identifier for this edit.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The order to be updated with this edit.</p>
     *
     * @return null|OrderReference
     */
    public function getResource();

    /**
     * <p>The actions to apply to the Order.
     * Cannot be updated after the edit has been applied.</p>
     *
     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Contains a preview of the changes in case of unapplied edit.
     * For applied edits, it contains the summary of the changes.</p>
     *
     * @return null|OrderEditResult
     */
    public function getResult();

    /**
     * <p>This field can be used to add textual information regarding the edit.</p>
     *
     * @return null|string
     */
    public function getComment();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?OrderReference $resource
     */
    public function setResource(?OrderReference $resource): void;

    /**
     * @param ?StagedOrderUpdateActionCollection $stagedActions
     */
    public function setStagedActions(?StagedOrderUpdateActionCollection $stagedActions): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?OrderEditResult $result
     */
    public function setResult(?OrderEditResult $result): void;

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void;
}
