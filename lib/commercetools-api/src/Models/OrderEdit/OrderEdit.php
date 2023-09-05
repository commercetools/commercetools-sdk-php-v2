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
    public const FIELD_KEY = 'key';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_STAGED_ACTIONS = 'stagedActions';
    public const FIELD_RESULT = 'result';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';

    /**
     * <p>Unique identifier of the Order Edit.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Order Edit.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-defined unique identifier of the Order Edit.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Order updated with this edit.</p>
     *

     * @return null|OrderReference
     */
    public function getResource();

    /**
     * <p>Update actions applied to the Order referenced by <code>resource</code>.</p>
     *

     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions();

    /**
     * <p>For applied edits, it's a summary of the changes on the Order.
     * For unapplied edits, it's a preview of the changes.</p>
     *

     * @return null|OrderEditResult
     */
    public function getResult();

    /**
     * <p>User-defined information regarding the Order Edit.</p>
     *

     * @return null|string
     */
    public function getComment();

    /**
     * <p>Custom Fields of the Order Edit.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Date and time (UTC) the Order Edit was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Order Edit was last updated.</p>
     *

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
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

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
     * @param ?OrderEditResult $result
     */
    public function setResult(?OrderEditResult $result): void;

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

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
}
