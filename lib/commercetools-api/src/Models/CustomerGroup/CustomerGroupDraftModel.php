<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerGroupDraftModel extends JsonObjectModel implements CustomerGroupDraft
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $groupName;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $groupName = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->key = $key;
        $this->groupName = $groupName;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined unique identifier for the Customer Group.
     * Keys can only contain alphanumeric characters, underscores, and hyphens.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Unique value which must be different from any value used for <code>name</code> in <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> in the Project.
     * If not, a <code>DuplicateField</code> <a href="/../api/errors#400-bad-request-1">error</a> is thrown.</p>
     *
     * @return null|string
     */
    public function getGroupName()
    {
        if (is_null($this->groupName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_GROUP_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->groupName = (string) $data;
        }

        return $this->groupName;
    }

    /**
     * <p>Custom Fields for the Customer Group.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $groupName
     */
    public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
