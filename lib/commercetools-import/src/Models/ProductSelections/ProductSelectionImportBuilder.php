<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceBuilder;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringBuilder;
use Commercetools\Import\Models\Customfields\Custom;
use Commercetools\Import\Models\Customfields\CustomBuilder;
use stdClass;

/**
 * @implements Builder<ProductSelectionImport>
 */
final class ProductSelectionImportBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var ?string
     */
    private $mode;

    /**

     * @var null|Custom|CustomBuilder
     */
    private $custom;

    /**

     * @var ?ProductSelectionAssignmentCollection
     */
    private $assignments;

    /**
     * <p>User-defined unique identifier. If an <a href="ctp:api:type:ProductSelection">ProductSelection</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>ProductSelection.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Maps to <code>ProductSelection.mode</code>.</p>
     *

     * @return null|string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * <p>Maps to <code>ProductSelection.custom</code>.</p>
     *

     * @return null|Custom
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>List of product assignments.</p>
     *

     * @return null|ProductSelectionAssignmentCollection
     */
    public function getAssignments()
    {
        return $this->assignments;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $mode
     * @return $this
     */
    public function withMode(?string $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @param ?Custom $custom
     * @return $this
     */
    public function withCustom(?Custom $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?ProductSelectionAssignmentCollection $assignments
     * @return $this
     */
    public function withAssignments(?ProductSelectionAssignmentCollection $assignments)
    {
        $this->assignments = $assignments;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): ProductSelectionImport
    {
        return new ProductSelectionImportModel(
            $this->key,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->mode,
            $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom,
            $this->assignments
        );
    }

    public static function of(): ProductSelectionImportBuilder
    {
        return new self();
    }
}
