<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShoppingListsConfigurationModel extends JsonObjectModel implements ShoppingListsConfiguration
{
    /**

     * @var ?int
     */
    protected $deleteDaysAfterLastModification;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $deleteDaysAfterLastModification = null
    ) {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    /**
     * <p>Default value for the <code>deleteDaysAfterLastModification</code> parameter of the <a href="ctp:api:type:ShoppingListDraft">ShoppingListDraft</a>.
     * This field may not be present on Projects created before January 2020.</p>
     *

     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterLastModification = (int) $data;
        }

        return $this->deleteDaysAfterLastModification;
    }


    /**
     * @param ?int $deleteDaysAfterLastModification
     */
    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }
}
