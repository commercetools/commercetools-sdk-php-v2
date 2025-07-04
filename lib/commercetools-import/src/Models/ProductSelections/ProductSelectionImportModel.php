<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceModel;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringModel;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomModel;
use stdClass;

/**
 * @internal
 */
final class ProductSelectionImportModel extends JsonObjectModel implements ProductSelectionImport
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $mode;

    /**
     *
     * @var ?Custom
     */
    protected $custom;

    /**
     *
     * @var ?ProductSelectionAssignmentCollection
     */
    protected $assignments;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?LocalizedString $name = null,
        ?string $mode = null,
        ?Custom $custom = null,
        ?ProductSelectionAssignmentCollection $assignments = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->mode = $mode;
        $this->custom = $custom;
        $this->assignments = $assignments;
    }

    /**
     * <p>User-defined unique identifier. If an <a href="ctp:api:type:ProductSelection">ProductSelection</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *
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
     * <p>Maps to <code>ProductSelection.name</code>.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Maps to <code>ProductSelection.mode</code>.</p>
     *
     *
     * @return null|string
     */
    public function getMode()
    {
        if (is_null($this->mode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->mode = (string) $data;
        }

        return $this->mode;
    }

    /**
     * <p>Maps to <code>ProductSelection.custom</code>.</p>
     *
     *
     * @return null|Custom
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>List of product assignments.</p>
     *
     *
     * @return null|ProductSelectionAssignmentCollection
     */
    public function getAssignments()
    {
        if (is_null($this->assignments)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSIGNMENTS);
            if (is_null($data)) {
                return null;
            }
            $this->assignments = ProductSelectionAssignmentCollection::fromArray($data);
        }

        return $this->assignments;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $mode
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?ProductSelectionAssignmentCollection $assignments
     */
    public function setAssignments(?ProductSelectionAssignmentCollection $assignments): void
    {
        $this->assignments = $assignments;
    }
}
